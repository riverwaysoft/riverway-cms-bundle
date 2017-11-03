<?php

namespace Riverway\Cms\CoreBundle\Entity;


/**
 * Widget
 *
 */
class Widget
{
    /**
     * @var int
     *
     */
    private $id;

    /**
     * @var Article
     *
     */
    private $article;

    /**
     * @var Sidebar
     *
     */
    private $sidebar;

    /**
     * @var array
     *
     */
    private $extraData;

    /**
     * @var string
     *
     */
    private $htmlContent;

    /**
     * @var int
     *
     */
    private $sequence;

    /**
     * @var string
     *
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->sequence = 1;
        $this->extraData = [];
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
     * Get articleId
     *
     * @return Article
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set articleId
     *
     * @param Article $article
     *
     * @return Widget
     */
    public function setArticle(Article $article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get sidebarId
     *
     * @return Sidebar
     */
    public function getSidebar()
    {
        return $this->sidebar;
    }

    /**
     * Set sidebarId
     *
     * @param Sidebar $sidebar
     *
     * @return Widget
     */
    public function setSidebar(Sidebar $sidebar)
    {
        $this->sidebar = $sidebar;

        return $this;
    }

    /**
     *
     * @return mixed
     */
    public function getExtraDataByKey(string $key)
    {
        return $this->extraData;
    }

    /**
     *
     * @return array
     */
    public function getExtraData(): array
    {
        return $this->extraData;
    }

    /**
     * Set extraData
     *
     * @param array $extraData
     *
     * @return Widget
     */
    public function setExtraData(array $extraData)
    {
        $this->extraData = $extraData;

        return $this;
    }

    /**
     * Get htmlContent
     *
     * @return string
     */
    public function getHtmlContent()
    {
        return $this->htmlContent;
    }

    /**
     * Set htmlContent
     *
     * @param string $htmlContent
     *
     * @return Widget
     */
    public function setHtmlContent($htmlContent)
    {
        $this->htmlContent = $htmlContent;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Set sequence
     *
     * @param integer $sequence
     *
     * @return Widget
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function fillFromArrayData(array $data)
    {
        if (isset($data['article'])) {
            $this->article = $data['article'];
        }
        if (isset($data['sidebar'])) {
            $this->sidebar = $data['sidebar'];
        }
        if (isset($data['sequence'])) {
            $this->sequence = $data['sequence'];
        }
        if (isset($data['html_content'])) {
            $this->htmlContent = $data['html_content'];
        }
    }

    /**
     * @param string $type
     * @param Article $article
     * @return Widget
     */
    public static function createForArticle(string $type, Article $article)
    {
        $entity = new self($type);
        $entity->setArticle($article);
        $entity->setHtmlContent('Hello world!');
        $entity->setSequence($article->getWidgets() ? $article->getWidgets()->count() : 0);

        return $entity;
    }

    /**
     * @param string $type
     * @param Sidebar $sidebar
     * @return Widget
     */
    public static function createForSidebar(string $type, Sidebar $sidebar)
    {
        $entity = new self($type);
        $entity->setSidebar($sidebar);
        $entity->setHtmlContent('Hello world!');
        $entity->setSequence($sidebar->getWidgets() ? $sidebar->getWidgets()->count() : 0);

        return $entity;
    }
}

