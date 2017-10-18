<?php

namespace Riverway\Cms\CoreBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Riverway\Cms\CoreBundle\Dto\CategoryDto;
use Riverway\Cms\CoreBundle\Enum\CategoryEnum;

/**
 * Category
 *
 */
class Category
{
    /**
     * @var int
     *
     */
    private $id;

    /**
     * @var string
     *
     */
    private $name;

    /**
     * @var string
     *
     */
    private $type;

    /**
     * @var boolean
     *
     */
    private $isRoot;

    /**
     * @var Category
     *
     */
    private $parent;

    /**
     * @var ArrayCollection|Category[]
     *
     */
    private $children;

    /**
     * @var ArrayCollection|Article[]
     *
     */
    private $articles;

    /**
     * @var ArrayCollection
     *
     */
    private $menu;

    /**
     * @var int
     *
     */
    private $externalId;


    public function __construct(CategoryEnum $categoryEnum, string $name)
    {
        $this->type = $categoryEnum->getValue();
        $this->name = $name;
        $this->isRoot = false;
        $this->children = new ArrayCollection();
        $this->articles = new ArrayCollection();
    }

    public static function createFromDto(CategoryDto $dto): Category
    {
        $category = new static(new CategoryEnum($dto->type), $dto->name);
        if ($dto->parent) {
            $category->changeParent($dto->parent);
        }
        $category->isRoot = $dto->isRoot;

        return $category;
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
     * Get name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return CategoryEnum
     */
    public function getType(): CategoryEnum
    {
        return new CategoryEnum($this->type);
    }

    /**
     * @return Category|null
     */
    public function getParent(): ?Category
    {
        return $this->parent;
    }

    public function markAsRoot()
    {
        $this->isRoot = true;
    }

    public function resetRoot()
    {
        $this->isRoot = false;
    }

    /**
     * @return bool
     */
    public function isRoot()
    {
        return $this->isRoot;
    }

    public function changeParent(Category $parent)
    {
        $this->parent = $parent;
        $this->type = $parent->getType()->getValue();
    }

    public function updateFromDTO(CategoryDto $categoryDto)
    {
        $this->parent = $categoryDto->parent;
        $this->type = $this->parent ? $this->parent->getType()->getValue() : (new CategoryEnum($categoryDto->type))->getValue();
        $this->name = $categoryDto->name;
        $this->isRoot = $categoryDto->isRoot;
    }

    public function createPreparedDto(): CategoryDto
    {
        $dto = new CategoryDto();
        $dto->parent = $this->parent;
        $dto->type = $this->type;
        $dto->name = $this->name;
        $dto->isRoot = $this->isRoot;

        return $dto;
    }

    public function updateExternalId($externalId)
    {
        $this->externalId = $externalId;
    }

    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @return Category[]|ArrayCollection
     */
    public function getChildren()
    {
        return $this->children;
    }

    public function __toString()
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function hasMenu()
    {
        return $this->menu && !$this->menu->isEmpty();
    }

    /**
     * @return MenuNode[]|ArrayCollection
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * @return Article[]|ArrayCollection
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * @param MenuNode $parentMenu
     * @return string
     */
    public function getNameForMenu(MenuNode $parentMenu)
    {
        return $parentMenu->getName().' category #'.$this->id;
    }
}
