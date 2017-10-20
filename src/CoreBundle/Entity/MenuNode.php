<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) 2011-2017 Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Riverway\Cms\CoreBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Knp\Menu\NodeInterface;

/**
 * MenuNode
 *
 */
class MenuNode implements NodeInterface
{
    /**
     * @var boolean
     *
     */
    protected $routeAbsolute = false;
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
     * @var ArrayCollection
     */
    private $children;
    /**
     * @var MenuNode|null
     */
    private $parent;

    /**
     * @var string
     *
     */
    private $label = '';
    /**
     * @var string
     *
     */
    private $uri;
    /**
     * @var string
     *
     */
    private $route;
    /**
     * @var array
     *
     */
    private $attributes = [];
    /**
     * @var array
     *
     */
    private $childrenAttributes = [];
    /**
     * @var array
     *
     */
    private $linkAttributes = [];
    /**
     * @var array
     *
     */
    private $labelAttributes = [];

    /**
     * @var boolean
     *
     */
    private $display = true;
    /**
     * @var boolean
     *
     */
    private $displayChildren = true;

    /**
     * @var Article
     */
    private $article;

    /**
     * @var Category
     */
    private $category;

    /**
     * Menu that integrates all node in any nesting levels
     * like "Main", "Top", "Footer" menu
     *
     * @var MenuNode
     */
    private $parentMenu;

    public function __construct(string $name, string $label = '')
    {
        $this->name = $name;
        $this->label = $label;
        $this->children = new ArrayCollection();
    }

    public function setUri($uri)
    {
        $this->uri = $uri;
    }

    /**
     * Return ID of this menu node.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param Article $article
     */
    public function setArticle(Article $article)
    {
        $this->article = $article;
        $this->uri = $article->getUri();
        if (!$this->label) {
            $this->label = $article->getTitle();
        }
    }

    /**
     * @return Article|null
     */
    public function getArticle() {
        return $this->article;
    }

    /**
     * @param Category $category
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;
        if (!$this->label) {
            $this->label = $category->getName();
        }
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param MenuNode $menuNode
     */
    public function addChild(MenuNode $menuNode)
    {
        $menuNode->setParent($this);
        $this->children->add($menuNode);
    }

    /**
     * Get all child menu nodes of this menu node. This will filter out all
     * non-NodeInterface children.
     *
     * @return MenuNode[]
     */
    public function getChildren()
    {
        $children = [];
        foreach ($this->children as $child) {
            if (!$child instanceof NodeInterface) {
                continue;
            }
            $children[] = $child;
        }

        return $children;
    }

    /**
     * Whether this menu node can be displayed, meaning it is set to display
     * and it does have a non-empty label.
     *
     * @return bool
     */
    public function isDisplayable()
    {
        return $this->display && $this->label;
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions()
    {
        return [
            'uri' => $this->uri,
            'route' => null,
            'label' => $this->label,
            'attributes' => $this->attributes,
            'childrenAttributes' => $this->childrenAttributes,
            'display' => $this->isDisplayable(),
            'displayChildren' => $this->displayChildren,
            'routeParameters' => $this->route,
            'routeAbsolute' => $this->routeAbsolute,
            'linkAttributes' => $this->linkAttributes,
            'labelAttributes' => $this->labelAttributes,
        ];
    }

    /**
     * @param MenuNode $node
     * @return $this
     */
    public function setParent(MenuNode $node)
    {
        $this->parent = $node;

        return $this;
    }

    /**
     * @param string $key
     * @param string $value
     */
    public function setChildrenAttribute(string $key, string $value)
    {
        $this->childrenAttributes[$key] = $value;
    }

    public function updateClass()
    {
        $this->attributes['class'] = $this->children->isEmpty() ? 'nav-item' : 'nav-item dropdown';
    }

    /**
     * @param string $key
     * @param string $value
     */
    public function setAttribute(string $key, string $value)
    {
        $this->attributes[$key] = $value;
    }

    /**
     * @return string
     */
    public function getLabel() {
        return $this->label;
    }

    /**
     * @param MenuNode $menu
     */
    public function setParentMenu(MenuNode $menu) {
        $this->parentMenu = $menu;
    }

    /**
     * @return MenuNode
     */
    public function getParentMenu() {
        return $this->parentMenu;
    }

    /**
     * @param Article $article
     * @param MenuNode $parentNode
     * @param MenuNode $parentMenu
     */
    public function updateFromArticle(Article $article, MenuNode $parentNode, MenuNode $parentMenu) {
        $this->setArticle($article);
        $this->setParentMenu($parentMenu);
        $parentNode->addChild($this);
    }

    /**
     * @param Category $category
     * @param MenuNode $parentNode
     * @param MenuNode $parentMenu
     */
    public function updateFromCategory(Category $category, MenuNode $parentNode, MenuNode $parentMenu) {
        $this->setCategory($category);
        $this->setParentMenu($parentMenu);
        $parentNode->addChild($this);
    }
}
