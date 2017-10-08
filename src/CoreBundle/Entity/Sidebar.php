<?php

namespace Riverway\Cms\CoreBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Sidebar
 *
 */
class Sidebar
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     *
     */
    private $name;

    /**
     * @var ArrayCollection
     */
    private $widgets;

    public function __construct()
    {
        $this->widgets = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return ArrayCollection
     */
    public function getWidgets() {
        return $this->widgets;
    }
}

