<?php

namespace Riverway\Cms\CoreBundle\Controller\Admin;

use Doctrine\ORM\EntityManager;
use Riverway\Cms\CoreBundle\Dto\ArticleDto;
use Riverway\Cms\CoreBundle\Entity\Article;
use Riverway\Cms\CoreBundle\Form\ArticleType;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends FOSRestController
{
    /**
     * @Route("/article/index", name="article_index")
     */
    public function indexAction(Request $request)
    {
        $qb = $this->getDoctrine()->getRepository('RiverwayCmsCoreBundle:Article')->createQueryBuilder('a');

        // replace this example code with whatever you need
        return $this->render('@RiverwayCmsCore/admin/article/index.html.twig', [
            'grid_config' => [
                'id',
                'title',
                'uri',
                'templateKey',
                'statusKey',
                'actions' => [
                    'value' => function (Article $article) {
                        return $this->renderView(
                            '@RiverwayCmsCore/admin/article/_actions.html.twig',
                            [
                                'object' => $article,
                            ]
                        );
                    },
                    'no_report' => true,
                ],
            ],
            'query' => $qb->getQuery(),
        ]);
    }

    /**
     * @Route("/article/{id}/edit", name="article_edit")
     */
    public function editAction(Article $article, Request $request)
    {
        $view = $this->view();
        $wRegistry = $this->get('Riverway\Cms\CoreBundle\Widget\WidgetRegistry');
        $view->setTemplate("@RiverwayCmsCore/admin/article/edit.html.twig");
        $em = $this->get('doctrine.orm.entity_manager');
        $dto = $article->createPreparedDto();
        $form = $this->createForm(ArticleType::class, $dto, ['validation_groups' => ['update'], 'article' => $article]);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $dto = $form->getData();
                $article->updateFromDTO($dto, $this->getUser());
                $em->getRepository('RiverwayCmsCoreBundle:MenuNode')->addArticleToParentCategoryMenuNodes($article);
                $em->persist($article);
                $em->flush();

                return $this->handleView($this->routeRedirectView('article_edit', ['id' => $article->getId()]));
            } else {

                return $this->handleView($view->setData($form)->setTemplateData([
                        'form' => $form->createView(),
                        'article' => $article,
                        'widgetTypes' => $wRegistry->getWidgetList(),
                    ]
                ));
            }
        }

        return $this->handleView($view->setData([
            'form' => $form->createView(),
            'article' => $article,
            'widgetTypes' => $wRegistry->getWidgetList(),
        ]));
    }

    /**
     * @Route("article/create", name="article_create")
     */
    public function createAction(
        Request $request
    ) {
        $dto = new ArticleDto();
        $form = $this->createForm(ArticleType::class, $dto, [
            'action' => $this->generateUrl('article_create'),
            'validation_groups' => ['create'],
        ]);
        $form->handleRequest($request);
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $dto = $form->getData();
                $article = Article::createFromDto($dto, $this->getUser());


                $em->persist($article);
                $em->flush();

                return $this->handleView($this->routeRedirectView('article_edit', ['id' => $article->getId()]));
            } else {
                return $this->handleView($this->view($form));
            }
        }

        return $this->handleView($this->view([
            'form' => $form->createView(),
        ])->setTemplate("@RiverwayCmsCore/admin/ajax-entity-form.html.twig"));
    }

    /**
     * @Route("/article/{id}/delete", name="article_delete")
     */
    public function deleteAction(
        Article $article
    ) {
        $this->getDoctrine()->getRepository('RiverwayCmsCoreBundle:Article')->removeArticle($article);

        return new Response("ok");
    }

    /**
     * @Route("/article/{id}/publish", name="article_publish")
     */
    public function publishAction(
        Article $article
    ) {
        $em = $this->getDoctrine()->getManager();
        $article->publish();
        $em->persist($article);

        return $this->redirectToRoute('article_edit', ['id' => $article->getId()]);
    }

    /**
     * @Route("article/{id}/image-delete", name="article_image_delete")
     */
    public function actionImageDelete(
        Article $article
    ) {
        $article->destroyFeaturedImage($this->get('Riverway\Cms\CoreBundle\Service\FileManager'));
        $this->getDoctrine()->getRepository('RiverwayCmsCoreBundle:Article')->saveArticle($article);

        return new Response();
    }
}