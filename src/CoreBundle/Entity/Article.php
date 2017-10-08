<?php

namespace Riverway\Cms\CoreBundle\Entity;

use Riverway\Cms\CoreBundle\Dto\ArticleDto;
use Riverway\Cms\CoreBundle\Enum\ArticleStatusEnum;
use Riverway\Cms\CoreBundle\Enum\TemplateEnum;
use Riverway\Cms\CoreBundle\Service\FileManager;
use Riverway\Cms\CoreBundle\Utils\UrlGenerator;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 * Article
 *
 * @Serializer\ExclusionPolicy("all")
 * @Serializer\AccessorOrder("alphabetical")
 */
class Article
{
    /**
     * @var int
     * @Serializer\Expose()
     */
    private $id;

    /**
     * @var string
     * @Serializer\Expose()
     */
    private $title;

    /**
     * @var string
     * @Serializer\Expose()
     */
    private $titleIcon;

    /**
     * @var string
     * @Serializer\Expose()
     */
    private $uri;

    /**
     * @var ArrayCollection
     */
    private $widgets;

    /**
     * @var string
     * @Serializer\Expose()
     */
    private $template;

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
     * @var Sidebar
     *
     */
    private $sidebar;
    /**
     * @var string
     * @Serializer\Expose()
     */
    private $featuredImage;

    /**
     * @var int
     * @Serializer\Expose()
     */
    private $status;

    /**
     * @var Category
     * @Serializer\Expose()
     */
    private $category;

    /**
     * @var ArrayCollection|Tag[]
     *
     */
    private $tags;

    public function __construct()
    {
        $this->status = ArticleStatusEnum::DRAFT();
        $this->tags = new ArrayCollection();
        $this->widgets = new ArrayCollection();
    }

    public static function createFromDto(ArticleDto $dto): Article
    {
        $entity = new static();
        $entity->updateFromDTO($dto);

        return $entity;
    }

    /**
     * @return string
     */
    public function getFeaturedImage()
    {
        return $this->featuredImage;
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
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get route
     *
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Get template
     *
     * @return int
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Get updatedAt
     *
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

    public function createUri()
    {
        if (!$this->uri) {
            $this->uri = UrlGenerator::generateFromString($this->title);
        }
    }

    /**
     * @return ArticleDto
     */
    public function createPreparedDto(): ArticleDto
    {
        $dto = new ArticleDto();
        $dto->template = $this->template;
        $dto->title = $this->title;
        $dto->titleIcon = $this->titleIcon;
        $dto->sidebar = $this->sidebar;
        $dto->uri = $this->uri;
        $dto->widgets = $this->widgets;
        $dto->category = $this->category;
        $dto->featuredImage = $this->featuredImage;
        $dto->tags = $this->tags;

        return $dto;
    }

    /**
     * @param ArticleDto $articleDto
     */
    public function updateFromDTO(ArticleDto $articleDto)
    {
        $this->template = (new TemplateEnum($articleDto->template))->getValue();
        $this->title = $articleDto->title;
        $this->titleIcon = $articleDto->titleIcon;
        $this->uri = $articleDto->uri;
        $this->sidebar = $articleDto->sidebar;
        $this->category = $articleDto->category;
        $this->widgets = $articleDto->widgets;
        $this->featuredImage = $articleDto->featuredImage;
        $this->tags = $articleDto->tags;
    }

    public function createFromArrayData(array $data)
    {
        $this->title = $data['title'];
        $this->uri = $data['uri'];
        if (isset($data['sidebar'])) {
            $this->sidebar = $data['sidebar'];
        }
        if (isset($data['status'])) {
            $enum = forward_static_call([ArticleStatusEnum::class, $data['status']]);
            $this->status = $enum->getValue();
        }
        if (isset($data['template'])) {
            $enum = forward_static_call([TemplateEnum::class, $data['template']]);
            $this->template = $enum->getValue();
        }
        if (isset($data['featuredImage'])) {
            $this->featuredImage = $data['featuredImage'];
        }
    }

    /**
     * @return Sidebar
     */
    public function getSidebar()
    {
        return $this->sidebar;
    }

    /**
     * @return Widget
     */
    public function getWidgets()
    {
        return $this->widgets;
    }

    public function publish()
    {
        $this->status = ArticleStatusEnum::PUBLISHED();
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     * @Serializer\VirtualProperty()
     *
     */
    public function getStatusKey()
    {
        return (new ArticleStatusEnum($this->status))->getKey();
    }

    /**
     * @return string
     * @Serializer\VirtualProperty()
     *
     */
    public function getTemplateKey()
    {
        return (new TemplateEnum($this->template))->getKey();
    }

    /**
     * @return bool
     */
    public function isPublished()
    {
        return $this->status === ArticleStatusEnum::PUBLISHED;
    }

    /**
     * @return string
     */
    public function getTitleIcon()
    {
        return $this->titleIcon;
    }

    public function destroyFeaturedImage(FileManager $fileManager)
    {
        $fileManager->remove($this->getFeaturedImage());
        $this->featuredImage = null;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param MenuNode $parentMenu
     * @return string
     */
    public function getNameForMenu(MenuNode $parentMenu)
    {
        return $parentMenu->getName().' article #'.$this->id;
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags()
    {
        return $this->tags;
    }
}

