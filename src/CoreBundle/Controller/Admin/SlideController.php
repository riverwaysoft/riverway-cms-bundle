<?php

namespace Riverway\Cms\CoreBundle\Controller\Admin;

use Riverway\Cms\CoreBundle\Entity\Slide;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SlideController extends Controller
{
    /**
     * @param Slide|null $slide
     * @param $key
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function renderSlidePreviewAction(?Slide $slide, $key)
    {
        return $this->render('@RiverwayCmsCore/admin/slide/_slide_preview.html.twig', [
            'key' => $key,
            'slide' => $slide ? $slide->getDto() : (new Slide())->getDto()
        ]);
    }
}
