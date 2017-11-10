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
use function foo\func;
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
            $schemaOrg = [];
            $base = $this->openGraph->get('base');
            /** @var Widget $editor */
            $editor  = $article->getWidgets()->filter(function (Widget $w){
                return $w->getName()===EditorWidget::class;
            })->first();
            if($editor){
                $articleDescription = substr(strip_tags($editor->getHtmlContent()), 0, 140) . '...';
                $schemaOrg['articleDescription'] = $articleDescription;
                $schemaOrg['articleCategory'] = $article->getCategory();
                $base->addMeta('description', $articleDescription);
                $doc = new \DOMDocument();
                @$doc->loadHTML($editor->getHtmlContent());
                if ($tag = $doc->getElementsByTagName('img')->item(0)) {
                    $base->addMeta('image', ($tag->getAttribute('src')));
                } elseif ($article->getFeaturedImage()) {
                    $base->addMeta('image', $article->getFeaturedImage());
                }
            }
            $base->addMeta('type', 'article');
            $base->addMeta('title', $article->getTitle());
            $base->addMeta('url', $request->getSchemeAndHttpHost().$request->getRequestUri());
            $schemaOrg['url'] = $_SERVER['HTTP_HOST'].substr($_SERVER['REQUEST_URI'], 1);
            $view = View::create([
                'article' => $article,
                'sidebar' => $article->getSidebar() ? $article->getSidebar() : '',
                'schemaOrg' => $schemaOrg
            ], 200);
            $view->setTemplate("@RiverwayCmsCore/templates/{$article->getTemplate()}");

            return $this->viewHandler->handle($view);
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