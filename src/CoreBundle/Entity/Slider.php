<?php

namespace Riverway\Cms\CoreBundle\Entity;


class Slider
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     *
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     */
    private $updatedAt;

    /**
     * @var boolean
     *
     */
    private $display = false;

    /**
     * @var string
     */
    private $creator;

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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function updatedTimestamps()
    {
        $this->updatedAt = new \DateTime();

        if (!$this->getCreatedAt()) {
            $this->createdAt = new \DateTime();
        }
    }

    public function setCreator($user) {
        if (!$this->creator) {
            $this->creator = $user;
        }
    }

    /**
     * @return string
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @return bool
     */
    public function getDisplay() {
        return (bool)$this->display;
    }

    /**
     * @param bool $display
     */
    public function setDisplay(bool $display) {
        $this->display = $display;
    }
}