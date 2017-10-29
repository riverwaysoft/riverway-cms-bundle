<?php

namespace Riverway\Cms\CoreBundle\Controller\Admin;

use FOS\RestBundle\Controller\FOSRestController;
use Riverway\Cms\CoreBundle\Entity\Article;
use Riverway\Cms\CoreBundle\Entity\Sidebar;
use Riverway\Cms\CoreBundle\Entity\Widget;
use Riverway\Cms\CoreBundle\Widget\EditableWidgetInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class WidgetController extends FOSRestController
{
    /**
     * @Route("/widget/{id}/form", name="get_widget")
     */
    public function getWidgetFormAction(Widget $entity)
    {
        $factory = $this->get('Riverway\Cms\CoreBundle\Widget\WidgetRegistry');
        /** @var EditableWidgetInterface $widget */
        $widget = $factory->createWidget($entity);

        $form = $widget->createForm([
            'action' => $this->generateUrl('update_widget', ['id' => $entity->getId()]),
        ]);
        $form->add('save', SubmitType::class, [
            'attr' => [
                'class' => 'modal-submit',
            ],
        ]);

        return $this->render(
            '@RiverwayCmsCore/admin/widget/form.html.twig', [
                'form' => $form->createView(),
                'widget' => $widget,
            ]
        );
    }

    /**
     * @Route("/widget/{id}/preview", name="get_widget_preview")
     */
    public function getWidgetPreviewAction(Widget $entity)
    {
        $factory = $this->get('Riverway\Cms\CoreBundle\Widget\WidgetRegistry');
        $widget = $factory->createWidget($entity);

        return new Response($widget->getContent());
    }

    /**
     * @Route("/widget/{id}/update", name="update_widget")
     */
    public function updateWidgetAction(Widget $entity, Request $request)
    {
        $factory = $this->get('Riverway\Cms\CoreBundle\Widget\WidgetRegistry');
        /** @var EditableWidgetInterface $widget */
        $widget = $factory->createWidget($entity);

        $form = $widget->createForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $widget->handleForm($form);

            return new JsonResponse([
                'status' => 'success',
                'updated_id' => $widget->getId(),
                'content' => $widget->getAdminPreview(),
            ]);
        }

        return new JsonResponse(['errors' => $form->getErrors(true, false)], 422);

    }

    /**
     * @Route("/widget/delete", name="delete_widget", condition="request.isXmlHttpRequest()")
     */
    public function deleteWidgetAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->request->get('id');
        $widget = $em->getRepository(Widget::class)->find($id);

        $em->remove($widget);
        $em->flush();

        return new JsonResponse(['status' => 'success', 'deleted_id' => $id]);
    }

    /**
     * @Route("/widget/create-for-sidebar/{id}",
     *     name="create_sidebar_widget")
     */
    public function createSidebarWidgetAction(Sidebar $sidebar, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = Widget::createForSidebar($request->get('type'), $sidebar);

        $em->persist($entity);
        $em->flush();

//        return $this->widgetAreaAction($sequence - 1, $entity);
        return $this->handleView($this->routeRedirectView('sidebar_edit', ['id' => $entity->getSidebar()->getId()]));
    }

    /**
     * @Route("/widget/create-for-article/{id}",
     *     name="create_article_widget")
     */
    public function createArticleWidgetAction(Article $article, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = Widget::createForArticle($request->get('type'), $article);

        $em->persist($entity);
        $em->flush();
        $em->refresh($entity);

        return $this->handleView($this->routeRedirectView('article_edit', ['id' => $entity->getArticle()->getId()]));
    }

    public function widgetAreaAction($sequence, Widget $entity)
    {
        $factory = $this->get('Riverway\Cms\CoreBundle\Widget\WidgetRegistry');
        $widget = $factory->createWidget($entity);
        return $this->render('@RiverwayCmsCore/admin/widget/_widget_area.html.twig', [
            'sequence' => $sequence,
            'widget' => $widget,
            'is_editable' => $widget instanceof EditableWidgetInterface,
        ]);
    }
}
