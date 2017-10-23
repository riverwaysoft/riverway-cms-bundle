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
    private $id;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $textColor;

    /**
     * @var string
     */
    private $backColor;

    /**
     * @var string
     */
    private $marginRight;

    /**
     * @var string
     */
    private $width;

    /**
     * @var string
     */
    private $url;


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
     * Set backColor
     *
     * @param string $backColor
     *
     * @return SlideElementParameters
     */
    public function setBackColor($backColor)
    {
        $this->backColor = $backColor;

        return $this;
    }

    /**
     * Get backColor
     *
     * @return string
     */
    public function getBackColor()
    {
        return $this->backColor;
    }

    /**
     * Set paddingRight
     *
     * @param string $marginRight
     *
     * @return SlideElementParameters
     */
    public function setMarginRight($marginRight)
    {
        $this->marginRight = $marginRight;

        return $this;
    }

    /**
     * Get paddingRight
     *
     * @return string
     */
    public function getMarginRight()
    {
        return $this->marginRight;
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
    public function setText(string $text)
    {
        $this->text = $text;
    }


}

