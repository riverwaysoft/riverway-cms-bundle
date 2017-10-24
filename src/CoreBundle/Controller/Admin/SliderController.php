<?php

namespace Riverway\Cms\CoreBundle\Controller\Admin;

use Riverway\Cms\CoreBundle\Entity\Slide;
use Riverway\Cms\CoreBundle\Entity\Slider;
use Riverway\Cms\CoreBundle\Enum\WidgetTypeEnum;
use Riverway\Cms\CoreBundle\Form\SliderType;
use Riverway\Cms\CoreBundle\Form\SlideType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\Request;

class SliderController extends Controller
{
    /**
     * @Route("/slider/index", name="slider_index")
     */
    public function indexAction(Request $request)
    {
        $sliders = $this->getDoctrine()->getRepository('RiverwayCmsCoreBundle:Slider')->findAll();

        return $this->render('@RiverwayCmsCore/admin/slider/index.html.twig', [
            'sliders' => $sliders
        ]);
    }

    /**
     * @Route("/slider/{id}/edit", name="slider_edit")
     */
    public function editAction(Slider $slider, Request $request)
    {
        $form = $this->createForm(SliderType::class, $slider, ['created' => true]);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($slider);
            $em->flush();

            return $this->redirectToRoute('slider_edit', ['id' => $slider->getId()]);
        }

        return $this->render('@RiverwayCmsCore/admin/slider/edit.html.twig', [
            'form' => $form->createView(),
            'slider' => $slider,
        ]);
    }

    /**
     * @Route("/slider/create", name="slider_create")
     */
    public function createAction(Request $request)
    {
        $slider = new Slider();

        $form = $this->createForm(SliderType::class, $slider, [
            'action' => $this->generateUrl('slider_create')
        ]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $slider->setCreator($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($slider);
            $em->flush();

            return $this->redirectToRoute('slider_index');
        }

        return $this->render('@RiverwayCmsCore/admin/ajax-entity-form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/slider/{id}/create-slide", name="slide_create")
     */
    public function createSlideAction(Request $request, Slider $slider)
    {
        $slide = new Slide();
        $slider->addSlide($slide);

        $em = $this->get('doctrine.orm.default_entity_manager');
        $em->persist($slider);
        $em->flush();

        return $this->redirect($request->headers->get('referer'));
    }

    /**
     * @Route("/slider/delete-slide/{id}", name="slide_delete")
     */
    public function deleteSlideAction(Request $request, Slide $slide) {
        $em = $this->get('doctrine.orm.default_entity_manager');
        $em->remove($slide);
        $em->flush();

        return $this->redirect($request->headers->get('referer'));
    }

}
