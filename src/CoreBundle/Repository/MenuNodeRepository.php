<?php
/**
 * Created by PhpStorm.
 * User: mitalcoi
 * Date: 31.08.17
 * Time: 18:50
 */

namespace Riverway\Cms\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Riverway\Cms\CoreBundle\Entity\Article;
use Riverway\Cms\CoreBundle\Entity\Category;
use Riverway\Cms\CoreBundle\Entity\MenuNode;

class MenuNodeRepository extends EntityRepository
{
    public function saveMenu(MenuNode $menuNode)
    {
        $this->getEntityManager()->persist($menuNode);
        $this->getEntityManager()->flush();
    }

    public function initializeMainMenu()
    {
        $menuRoot = new MenuNode("root", "#");
        $menuRoot->setUri('#');
        $this->getEntityManager()->persist($menuRoot);

        $mainMenu = new MenuNode('main', '##');
        $mainMenu->setChildrenAttribute('class', 'navbar-nav bd-navbar-nav flex-row');
        $mainMenu->setUri('##');
        $mainMenu->setParent($menuRoot);
        $this->getEntityManager()->persist($mainMenu);

        $footerMenu = new MenuNode('footer', 'Footer');
        $footerMenu->setUri('#footer');
        $footerMenu->setParent($menuRoot);
        $this->getEntityManager()->persist($footerMenu);

        $this->getEntityManager()->flush();

        return $mainMenu;
    }

    /**
     * Solves all issues with creating/updating category menu node
     * and nodes for its nested categories and articles
     *
     * @param Category $category
     * @param MenuNode $parentNode
     * @param MenuNode $parentMenu
     */
    public function addCategoryToMenu(Category $category, MenuNode $parentNode, MenuNode $parentMenu)
    {
        $node = null;
        if ($category->hasMenu()) {
            foreach ($category->getMenu() as $catMenu) {
                if ($catMenu->getParentMenu() && $catMenu->getParentMenu()->getName() === $parentMenu->getName()) {
                    $node = $catMenu;
                }
            }
        }
        if (!$node) {
            $node = new MenuNode($category->getNameForMenu($parentMenu));
        }
        $node->updateFromCategory($category, $parentNode, $parentMenu);

        foreach ($category->getArticles() as $article) {
            $this->addArticleToMenu($article, $node, $parentMenu);
        }

        if ($category->isRoot()) {
            foreach ($category->getChildren() as $child) {
                $this->addCategoryToMenu($child, $node, $parentMenu);
            }
        }
        $this->getEntityManager()->persist($node);
        $this->getEntityManager()->flush();
    }

    /**
     * Create article menu nodes (if not exist) for each
     * article category menu node
     * Delete article menu nodes for other categories
     *
     * @param Article $article
     */
    public function addArticleToParentCategoryMenuNodes(Article $article)
    {
        if (($category = $article->getCategory()) && $category->hasMenu()) {
            foreach ($category->getMenu() as $catMenu) {
                // remove from old nodes
                $oldMenus = $this->createQueryBuilder('m')
                    ->andWhere('m.article=:aid')
                    ->andWhere('m.parent!=:cid')
                    ->setParameter('aid', $article)
                    ->setParameter('cid', $catMenu)
                    ->getQuery()->getResult();
                if ($oldMenus) {
                    foreach ($oldMenus as $oldMenu) {
                        $this->getEntityManager()->remove($oldMenu);
                        $this->getEntityManager()->flush();
                    }
                }

                // add to new nodes
                $this->addArticleToMenu($article, $catMenu, $catMenu->getParentMenu());
            }
        } elseif (!$category) {
            $oldMenus = $this->createQueryBuilder('m')
                ->innerJoin('m.parent', 'parent')
                ->andWhere('m.article=:aid')
                ->andWhere('parent!=:root_id')
                ->setParameter('aid', $article)
                ->setParameter('root_id', 1)
                ->getQuery()->getResult();
            if ($oldMenus) {
                foreach ($oldMenus as $oldMenu) {
                    $this->getEntityManager()->remove($oldMenu);
                    $this->getEntityManager()->flush();
                }
            }
        }
    }

    /**
     * Add Article node as a child node for parentNode in parentMenu
     *
     * @param Article $article
     * @param MenuNode $parentNode
     * @param MenuNode $parentMenu
     */
    public function addArticleToMenu(Article $article, MenuNode $parentNode, MenuNode $parentMenu)
    {
        if ($article->isPublished()) {
            $artMenu = $this->findOneBy([
                'article' => $article,
                'parentMenu' => $parentMenu,
                'parent' => $parentNode,
            ]);

            if (!$artMenu) {
                $artMenu = new MenuNode($article->getNameForMenu($parentMenu));
            }
            $artMenu->updateFromArticle($article, $parentNode, $parentMenu);
            $this->getEntityManager()->persist($artMenu);
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @param Article $article
     */
    public function removeArticleFromAll(Article $article)
    {
        $menus = $this->findBy(['article' => $article]);
        foreach ($menus as $menu) {
            $this->getEntityManager()->remove($menu);
            $this->getEntityManager()->flush();
        }
    }

    public function addCategoryToParentMenuNodes(Category $category)
    {
        if (($parent = $category->getParent()) && $parent->hasMenu()) {
            foreach ($parent->getMenu() as $parentMenu) {
                // remove from old nodes
                $oldMenus = $this->createQueryBuilder('m')
                    ->andWhere('m.category=:cid')
                    ->andWhere('m.parent!=:pid')
                    ->setParameter('cid', $category)
                    ->setParameter('pid', $parentMenu)
                    ->getQuery()->getResult();
                if ($oldMenus) {
                    foreach ($oldMenus as $oldMenu) {
                        $this->getEntityManager()->remove($oldMenu);
                        $this->getEntityManager()->flush();
                    }
                }
                // add to new nodes
                $this->addCategoryToMenu($category, $parentMenu, $parentMenu->getParentMenu());
            }

        } elseif (!$parent) {
            $oldMenus = $this->createQueryBuilder('m')
                ->innerJoin('m.parent', 'parent')
                ->andWhere('m.category=:cid')
                ->andWhere('parent!=:root_id')
                ->setParameter('cid', $category)
                ->setParameter('root_id', 1)
                ->getQuery()->getResult();
            if ($oldMenus) {
                foreach ($oldMenus as $oldMenu) {
                    $this->getEntityManager()->remove($oldMenu);
                    $this->getEntityManager()->flush();
                }
            }
        }
    }

}