<?php
/**
 * Created by PhpStorm.
 * User: mitalcoi
 * Date: 28.08.17
 * Time: 15:19
 */

namespace Riverway\Cms\CoreBundle\Service;


use Beyerz\OpenGraphProtocolBundle\Libraries\OpenGraph;
use Beyerz\OpenGraphProtocolBundle\Libraries\OpenGraphInterface;
use Riverway\Cms\CoreBundle\Entity\Article;
use Riverway\Cms\CoreBundle\Entity\Widget;
use Riverway\Cms\CoreBundle\Enum\ArticleStatusEnum;
use Riverway\Cms\CoreBundle\Repository\ArticleRepository;
use FOS\RestBundle\View\View;
use FOS\RestBundle\View\ViewHandler;
use Riverway\Cms\CoreBundle\Widget\Realisation\EditorWidget;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticleRenderer
{
    private $viewHandler;
    private $repo;
    private $openGraph;

    public function __construct(ViewHandler $viewHandler, ArticleRepository $articleRepository, OpenGraph $openGraph)
    {
        $this->viewHandler = $viewHandler;
        $this->repo = $articleRepository;
        $this->openGraph = $openGraph;
    }

    public function render(Request $request):?Response
    {
        $article = $this->findArticle($request);
        if ($article) {
            $base = $this->openGraph->get('base');
            /** @var Widget $editor */
            $editor  = $article->getWidgets()->filter(function (Widget $w){
                return $w->getName()===EditorWidget::class;
            })->first();
            if($editor){
                $base->addMeta('description', substr(strip_tags($editor->getHtmlContent()), 0, 140) . '...');
            }
            $base->addMeta('title', $article->getTitle());
            $base->addMeta('image', gethostbyaddr($_SERVER['REMOTE_ADDR']) . $article->getFeaturedImage());
            $base->addMeta('url', $request->getSchemeAndHttpHost().$request->getRequestUri());
            $view = View::create([
                'article' => $article,
                'sidebar' => $article->getSidebar() ? $article->getSidebar() : '',
            ], 200);
            $view->setTemplate("@RiverwayCmsCore/templates/{$article->getTemplate()}");

            return $this->viewHandler->handle($view);
        } else {
            return null;
        }
    }

    public function findArticle(Request $request): ?Article
    {
        $route = $request->getRequestUri();

        return $this->repo->findOneBy([
            'uri' => $route,
            'status' => ArticleStatusEnum::PUBLISHED,
        ]);
    }
}