<?php

namespace Riverway\Cms\CoreBundle\Controller\Front;

use Doctrine\ORM\Query;
use Riverway\Cms\CoreBundle\Entity\Tag;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller
{
    /**
     * @Route("/search/{id}", name="tag_search")
     */
    public function tagSearchAction(Tag $tag, Request $request)
    {
        $query = $this->getDoctrine()->getRepository('RiverwayCmsCoreBundle:Article')->getArticleQuery();

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('@RiverwayCmsCore/search/list.html.twig', ['pagination'=>$pagination]);

    }

}
