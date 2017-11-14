<?php
/**
 * Created by PhpStorm.
 * User: mitalcoi
 * Date: 28.08.17
 * Time: 15:19
 */

namespace Riverway\Cms\CoreBundle\Service;


use Beyerz\OpenGraphProtocolBundle\Libraries\OpenGraph;
use FOS\RestBundle\View\View;
use FOS\RestBundle\View\ViewHandler;
use Riverway\Cms\CoreBundle\Entity\Article;
use Riverway\Cms\CoreBundle\Entity\Widget;
use Riverway\Cms\CoreBundle\Enum\ArticleStatusEnum;
use Riverway\Cms\CoreBundle\Repository\ArticleRepository;
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
            /** @var Widget $editor */
            $editor = $article->getWidgets()->filter(
                function (Widget $w) {
                    return $w->getName() === EditorWidget::class;
                }
            )->first();
            $schemaOrg = [];
            $image = null;
            if ($editor) {
                $image = $this->retrieveImage($editor, $request);
                $schemaOrg = $this->generateSchemaOrg($editor, $image);
                $this->fillOGMeta($editor, $request, $image);
            }

            $view = View::create(
                [
                    'article' => $article,
                    'sidebar' => $article->getSidebar() ? $article->getSidebar() : '',
                    'schemaOrg' => $schemaOrg,
                ],
                200
            );
            $view->setTemplate("@RiverwayCmsCore/templates/{$article->getTemplate()}");

            return $this->viewHandler->handle($view);
        }
        return null;
    }

    public function findArticle(Request $request): ?Article
    {
        $route = $request->getRequestUri();

        return $this->repo->findOneBy(
            [
                'uri' => $route,
                'status' => ArticleStatusEnum::PUBLISHED,
            ]
        );
    }

    private function fillOGMeta(Widget $editor, Request $request, ?string $image = null)
    {
        $base = $this->openGraph->get('base');
        $base->addMeta('description', $editor->getShortHtmlContent());
        $base->addMeta('image', $image);
        $base->addMeta('type', 'article');
        $base->addMeta('title', $editor->getArticle()->getTitle());
        $base->addMeta('url', $request->getSchemeAndHttpHost().$request->getRequestUri());
    }

    private function generateSchemaOrg(Widget $editor, ?string $image = null): array
    {
        $schemaOrg['articleDescription'] = $editor->getShortHtmlContent();
        $schemaOrg['articleCategory'] = $editor->getArticle()->getCategory();
        $schemaOrg['image'] = $image;

        return $schemaOrg;
    }

    private function retrieveImage(Widget $editor, Request $request): ?string
    {
        $doc = new \DOMDocument();
        @$doc->loadHTML($editor->getHtmlContent());
        if ($doc->getElementsByTagName('img')->item(0)) {
            $image = $request->getSchemeAndHttpHost().$doc->getElementsByTagName('img')->item(0)->getAttribute('src');
        } else {
            $image = $request->getSchemeAndHttpHost().$editor->getArticle()->getFeaturedImage();
        }

        return $image;
    }
}