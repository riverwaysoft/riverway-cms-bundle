<?php

namespace Riverway\Cms\CoreBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Riverway\Cms\CoreBundle\Dto\SlideDto;
use Riverway\Cms\CoreBundle\Dto\SliderDto;
use Symfony\Component\Validator\Constraints as Assert;

class Slider
{
    /**
     * @var int
     */
    private $id;

    /**
     * @Assert\NotBlank()
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
     * @var ArrayCollection|Slide[]
     */
    private $slides;

    public function __construct()
    {
        $this->slides = new ArrayCollection();
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

    /**
     * @param Slide $slide
     */
    public function addSlide(Slide $slide) {
        $slide->setSlider($this);
        $this->slides->add($slide);
    }

    /**
     * @param Slide $slide
     */
    public function removeSlide(Slide $slide) {
        $slide->setSlider(null);
        $this->slides->removeElement($slide);
    }

    /**
     * @return ArrayCollection|Slide[]
     */
    public function getSlides() {
        return $this->slides;
    }

    public function getUnfoldedSlides() {
        foreach ($this->slides as $slide) {
            $slide->getData();
        }
    }

    /**
     * @return SliderDto
     */
    public function getDto() {
        $dto = new SliderDto();
        $dto->id = $this->id;
        $dto->name = $this->name;
        $dto->display = (bool)$this->display;
        foreach ($this->slides as $slide) {
            $dto->slides[] = $slide->getDto();
        }

        return $dto;
    }

    /**
     * @param SliderDto $dto
     */
    public function updateFromDto(SliderDto $dto) {
        $this->name = $dto->name;
        $this->display = $dto->display;
        foreach ($this->slides as $key => $slide) {
            if (!isset($dto->slides[$key])) {
                continue;
            }
            $slideDto =$dto->slides[$key];
            /** @var SlideDto $slideDto */
            $slide->updateFromDto($slideDto);
        }
    }

}