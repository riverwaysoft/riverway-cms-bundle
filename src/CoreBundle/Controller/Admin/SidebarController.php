<?php

namespace Riverway\Cms\CoreBundle\Controller\Admin;

use Riverway\Cms\CoreBundle\Entity\Sidebar;
use Riverway\Cms\CoreBundle\Entity\Widget;
use Riverway\Cms\CoreBundle\Enum\WidgetTypeEnum;
use Riverway\Cms\CoreBundle\Form\SidebarType;
use Riverway\Cms\CoreBundle\Widget\Realisation\EditorWidget;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SidebarController extends Controller
{
    /**
     * @Route("/sidebar/index", name="sidebar_index")
     */
    public function indexAction(Request $request)
    {
        $sidebars = $this->getDoctrine()->getRepository('RiverwayCmsCoreBundle:Sidebar')->findAll();

        return $this->render('@RiverwayCmsCore/admin/sidebar/index.html.twig', [
            'sidebars' => $sidebars
        ]);
    }

    /**
     * @Route("/sidebar/{id}/edit", name="sidebar_edit")
     */
    public function editAction(Sidebar $sidebar, Request $request)
    {
        $form = $this->createForm(SidebarType::class, $sidebar);
        $wRegistry = $this->get('Riverway\Cms\CoreBundle\Widget\WidgetRegistry');

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sidebar);
            $em->flush();

            return $this->redirectToRoute('sidebar_edit', ['id' => $sidebar->getId()]);
        }

        return $this->render('@RiverwayCmsCore/admin/sidebar/edit.html.twig', [
            'form' => $form->createView(),
            'sidebar' => $sidebar,
            'widgetTypes' => $wRegistry->getWidgetList()
        ]);
    }

    /**
     * @Route("/sidebar/create", name="sidebar_create")
     */
    public function createAction(Request $request)
    {
        $sidebar = new Sidebar();

        $form = $this->createForm(SidebarType::class, $sidebar, [
            'action' => $this->generateUrl('sidebar_create')
        ]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sidebar);
            $em->flush();

            $em = $this->getDoctrine()->getManager();
            $entity = Widget::createForSidebar(EditorWidget::class, $sidebar);

            $em->persist($entity);
            $em->flush();
            $em->refresh($entity);

            return $this->redirectToRoute('sidebar_index');
        }

        return $this->render('@RiverwayCmsCore/admin/ajax-entity-form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
