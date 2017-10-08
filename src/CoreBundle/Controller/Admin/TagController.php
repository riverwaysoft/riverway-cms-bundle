<?php

namespace Riverway\Cms\CoreBundle\Controller\Admin;

use Riverway\Cms\CoreBundle\Dto\ArticleDto;
use Riverway\Cms\CoreBundle\Entity\Article;
use Riverway\Cms\CoreBundle\Enum\WidgetTypeEnum;
use Riverway\Cms\CoreBundle\Form\ArticleType;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TagController extends FOSRestController
{

    /**
     * @Route("/tags/find-tags", name="find_tags")
     */
    public function findTagsAction(Request $request)
    {
        return new JsonResponse($this->getDoctrine()->getRepository('RiverwayCmsCoreBundle:Tag')->findList($request->get('page_limit'),
            $request->get('q')));
    }
}