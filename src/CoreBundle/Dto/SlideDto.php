<?php

namespace Riverway\Cms\CoreBundle\Dto;


use Riverway\Cms\CoreBundle\Entity\SlideButtonElementParameters;
use Riverway\Cms\CoreBundle\Entity\SlideElementParameters;

class SlideDto
{
    public $id;
    /**
     * @var SlideElementParameters
     */
    public $header;

    /**
     * @var SlideElementParameters
     */
    public $subHeader;

    /**
     * @var SlideElementParameters
     */
    public $description;

    /**
     * @var SlideButtonElementParameters
     */
    public $button;
    public $textAlign;
    public $marginTop;
    public $marginLeft;
    public $width;
    public $url;
    public $imageUrl;
}