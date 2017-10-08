<?php
/**
 * Created by PhpStorm.
 * User: mitalcoi
 * Date: 28.08.17
 * Time: 15:19
 */

namespace Riverway\Cms\CoreBundle\Service;


use Riverway\Cms\CoreBundle\Entity\Article;
use Riverway\Cms\CoreBundle\Enum\ArticleStatusEnum;
use Riverway\Cms\CoreBundle\Repository\ArticleRepository;
use FOS\RestBundle\View\View;
use FOS\RestBundle\View\ViewHandler;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticleRenderer
{
    private $viewHandler;
    private $repo;

    public function __construct(ViewHandler $viewHandler, ArticleRepository $articleRepository)
    {
        $this->viewHandler = $viewHandler;
        $this->repo = $articleRepository;
    }

    public function render(Request $request):?Response
    {
        $article = $this->findArticle($request);
        if ($article) {
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