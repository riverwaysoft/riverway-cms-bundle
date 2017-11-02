<?php

namespace Riverway\Cms\CoreBundle\Entity;

/**
 * SlideElementParameters
 */
class SlideElementParameters
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $text;

    /**
     * @var string
     */
    protected $textColor;

    /**
     * @var int
     */
    protected $marginLeft;

    /**
     * @var int
     */
    protected $width;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var string
     */
    protected $type;

    public function __construct()
    {
        $this->type = 'text';
        $this->marginLeft = 0;
        $this->width = 100;
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
     * Set textColor
     *
     * @param string $textColor
     *
     * @return SlideElementParameters
     */
    public function setTextColor($textColor)
    {
        $this->textColor = $textColor;

        return $this;
    }

    /**
     * Get textColor
     *
     * @return string
     */
    public function getTextColor()
    {
        return $this->textColor;
    }

    /**
     * Set paddingRight
     *
     * @param string $marginLeft
     *
     * @return SlideElementParameters
     */
    public function setMarginLeft($marginLeft)
    {
        $this->marginLeft = $marginLeft;

        return $this;
    }

    /**
     * Get paddingRight
     *
     * @return string
     */
    public function getMarginLeft()
    {
        return $this->marginLeft;
    }

    /**
     * Set width
     *
     * @param string $width
     *
     * @return SlideElementParameters
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return SlideElementParameters
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(?string $text)
    {
        $this->text = $text;
    }


}

