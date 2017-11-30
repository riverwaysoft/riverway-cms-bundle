<?php

namespace Riverway\Cms\CoreBundle\Controller\Front;

use Doctrine\ORM\Query;
use Riverway\Cms\CoreBundle\Entity\Tag;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
     * @Route("/crime-map-search", name="crime_map_search", options={"expose"=true})
     * @param Request $request
     * @return Response
     */
    public function crimeMapSearchAction(Request $request): Response
    {
        if (!$request->isXmlHttpRequest()) {
            $message = sprintf('No route found for "%s %s"', $request->getMethod(), $request->getPathInfo());

            if ($referer = $request->headers->get('referer')) {
                $message .= sprintf(' (from "%s")', $referer);
            }

            throw new NotFoundHttpException($message);
        }
        $crimeMapManager = $this->get('Riverway\Cms\CoreBundle\Service\CrimeMap\CrimeMapManager');
        $cityLocation = $crimeMapManager->getLocationByName($request->get('address'));
        if ($cityLocation) {
            $neighbourhood = $crimeMapManager->locateNeighbourhood($cityLocation);
            if ($neighbourhood) {
                $poly = $crimeMapManager->boundaryNeighbourhood($neighbourhood);
                $crimes = $crimeMapManager->streetLevelCrimes($poly);

                return new JsonResponse([
                    'success' => true,
                    'data' => [
                        'lat' => $cityLocation->lat,
                        'lng' => $cityLocation->lng,
                        'crimes' => $crimes
                    ]
                ]);
            }
        }

        return new JsonResponse([
            'success' => false
        ]);
    }

}
