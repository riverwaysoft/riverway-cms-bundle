<?php

namespace Riverway\Cms\CoreBundle\Controller\Front;

use Riverway\Cms\CoreBundle\Entity\Article;
use Riverway\Cms\CoreBundle\Entity\Tag;
use Riverway\Cms\CoreBundle\Entity\Widget;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContentController extends Controller
{

    public function renderWidgetAction(Widget $entity)
    {
        $factory = $this->get('Riverway\Cms\CoreBundle\Widget\WidgetRegistry');
        $widget = $factory->createWidget($entity);
        return $this->render('RiverwayCmsCoreBundle:templates/common:_widget.html.twig', [
            'widget' => $widget,
        ]);
    }

    /**
     * @Route("/preview/{id}", name="preview_article")
     */
    public function previewAction(Article $article) {
        return $this->render("@RiverwayCmsCore/templates/{$article->getTemplate()}", [
            'article' => $article,
            'sidebar' => $article->getSidebar() ? $article->getSidebar() : '',
        ]);
    }

}
