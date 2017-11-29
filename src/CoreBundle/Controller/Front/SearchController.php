<?php

namespace Riverway\Cms\CoreBundle\Controller\Front;

use Doctrine\ORM\Query;
use Riverway\Cms\CoreBundle\Entity\Tag;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SearchController extends Controller
{
    /**
     * @Route("/search/{id}", name="tag_search")
     * @param Tag $tag
     * @param Request $request
     * @return Response
     */
    public function tagSearchAction(Tag $tag, Request $request): Response
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

    /**
     * @Route("/crime-map-search", name="crime_map_search", condition="request.isXmlHttpRequest()", options={"expose"=true})
     * @param Request $request
     * @return Response
     */
    public function crimeMapSearchAction(Request $request): Response
    {
        $crimeMapManager = $this->get('Riverway\Cms\CoreBundle\Service\CrimeMap\CrimeMapManager');
        $cityLocation = $crimeMapManager->getLocationByName($request->get('address'));
        $poly = $crimeMapManager->boundaryNeighbourhood($crimeMapManager->locateNeighbourhood($cityLocation));
        $crimes = $crimeMapManager->streetLevelCrimes($poly);

        return new JsonResponse([
            'lat' => $cityLocation->lat,
            'lng' => $cityLocation->lng,
            'crimes' => $crimes
        ]);
    }

}
