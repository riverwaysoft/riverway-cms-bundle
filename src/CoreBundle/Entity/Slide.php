<?php

namespace Riverway\Cms\CoreBundle\Entity;

use Riverway\Cms\CoreBundle\Dto\SlideDto;
use Riverway\Cms\CoreBundle\Enum\SliderTextAlignEnum;
use Riverway\Cms\CoreBundle\Enum\SliderVerticalAlignEnum;

/**
 * Slide
 */
class Slide
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Slider
     */
    private $slider;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct()
    {
        $this->textAlign = SliderTextAlignEnum::LEFT();
        $this->verticalAlign = SliderVerticalAlignEnum::TOP();
    }

    /**
     * @var string
     */
    private $imageUrl = '/uploads/images/slider_slug.png';

    /**
     * @var SlideElementParameters
     */
    private $header;


    /**
     * @var SlideElementParameters
     */
    private $subHeader;

    /**
     * @var SlideElementParameters
     */
    private $description;

    /**
     * @var SlideElementParameters
     */
    private $button;

    /**
     * @var string
     */
    private $textAlign;

    /**
     * @var string
     */
    private $verticalAlign;

    /**
     * @var int
     * @Assert\Range(min=0, max=90)
     */
    private $marginRight = 0;

    /**
     * @var int
     * @Assert\NotBlank(min=10, max=100)
     */
    private $width = 100;

    /**
     * @var string
     */
    private $url;

    /**
     * @param Slider $slider
     */
    public function setSlider(Slider $slider) {
        $this->slider = $slider;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     */
    public function setImageUrl(string $imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return SlideElementParameters|null
     */
    public function getHeader(): ?SlideElementParameters
    {
        return $this->header;
    }

    /**
     * @param SlideElementParameters|null $header
     */
    public function setHeader(?SlideElementParameters $header = null)
    {
        $this->header = $header;
    }

    /**
     * @return SlideElementParameters|null
     */
    public function getSubHeader(): ?SlideElementParameters
    {
        return $this->subHeader;
    }

    /**
     * @param SlideElementParameters|null $subHeader
     */
    public function setSubHeader(?SlideElementParameters $subHeader = null)
    {
        $this->subHeader = $subHeader;
    }

    /**
     * @return SlideElementParameters|null
     */
    public function getDescription(): ?SlideElementParameters
    {
        return $this->description;
    }

    /**
     * @param SlideElementParameters|null $description
     */
    public function setDescription(?SlideElementParameters $description = null)
    {
        $this->description = $description;
    }

    /**
     * @return SlideElementParameters|null
     */
    public function getButton(): ?SlideElementParameters
    {
        return $this->button;
    }

    /**
     * @param SlideElementParameters|null $button
     */
    public function setButton(?SlideElementParameters $button = null)
    {
        $this->button = $button;
    }

    /**
     * @return string
     */
    public function getTextAlign(): string
    {
        return $this->textAlign;
    }

    /**
     * @param string $textAlign
     */
    public function setTextAlign(string $textAlign)
    {
        $this->textAlign = $textAlign;
    }

    /**
     * @return string
     */
    public function getVerticalAlign(): string
    {
        return $this->verticalAlign;
    }

    /**
     * @param string $verticalAlign
     */
    public function setVerticalAlign(string $verticalAlign)
    {
        $this->verticalAlign = $verticalAlign;
    }

    /**
     * @return int
     */
    public function getMarginRight(): int
    {
        return $this->marginRight;
    }

    /**
     * @param int $marginRight
     */
    public function setMarginRight(int $marginRight)
    {
        $this->marginRight = $marginRight;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width)
    {
        $this->width = $width;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return SlideDto
     */
    public function getDto() {
        $dto = new SlideDto();
        $dto->id = $this->id;
        $dto->header = $this->header ? $this->header : new SlideElementParameters();
        $dto->subHeader = $this->subHeader ? $this->subHeader : new SlideElementParameters();
        $dto->description = $this->description ? $this->description : new SlideElementParameters();
        $dto->button = $this->button ? $this->button : new SlideElementParameters();
        $dto->textAlign = $this->textAlign;
        $dto->verticalAlign = $this->verticalAlign;
        $dto->marginRight = $this->marginRight;
        $dto->width = $this->width;
        $dto->url = $this->url;
        $dto->imageUrl = $this->imageUrl;

        return $dto;
    }

    /**
     * @param SlideDto $dto
     */
    public function updateFromDto(SlideDto $dto) {
        if ($dto->header->getText()) {
            $this->header = $dto->header;
        }
        if ($dto->subHeader->getText()) {
            $this->subHeader = $dto->subHeader;
        }
        if ($dto->description->getText()) {
            $this->description = $dto->description;
        }
        if ($dto->button->getText()) {
            $this->button = $dto->button;
        }
        $this->textAlign = $dto->textAlign;
        $this->verticalAlign = $dto->verticalAlign;
        $this->marginRight = $dto->marginRight;
        $this->width = $dto->width;
        $this->url = $dto->url;
        $this->imageUrl = $dto->imageUrl;
    }
}

