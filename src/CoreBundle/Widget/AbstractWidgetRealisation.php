<?php
/**
 * Created by PhpStorm.
 * User: kate
 * Date: 28.08.17
 * Time: 13:41
 */

namespace Riverway\Cms\CoreBundle\Widget;


use Doctrine\ORM\EntityManager;
use Riverway\Cms\CoreBundle\Entity\Widget;
use Riverway\Cms\CoreBundle\Repository\WidgetRepository;
use Symfony\Bridge\Twig\TwigEngine;
use Symfony\Component\Templating\EngineInterface;

abstract class AbstractWidgetRealisation
{
    /** @var  Widget */
    protected $entity;
    /** @var  WidgetRepository */
    protected $repo;
    /** @var  EngineInterface */
    protected $engine;

    public function setEntity(Widget $entity)
    {
        $this->entity = $entity;
    }

    public function getId(): int
    {
        return $this->entity->getId();
    }

    public function setEntityManager(EntityManager $entityManager)
    {
        $this->repo = $entityManager->getRepository('RiverwayCmsCoreBundle:Widget');
    }

    public function setTwigEngine(TwigEngine $engine)
    {
        $this->engine = $engine;
    }

    public function getName(): string
    {
        return static::class;
    }

    public function getUniqueId(): string
    {
        return uniqid($this->getName());
    }
}