<?php

namespace Riverway\Cms\CoreBundle\Entity;

/**
 * SlideButtonElementParameters
 */
class SlideButtonElementParameters extends SlideElementParameters
{
    /** @var string */
    private $bgColor;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'button';
        $this->width = 20;
    }

    /**
     * @return string
     */
    public function getBgColor(): ?string
    {
        return $this->bgColor;
    }

    /**
     * @param string $bgColor
     */
    public function setBgColor(string $bgColor)
    {
        $this->bgColor = $bgColor;
    }

}

