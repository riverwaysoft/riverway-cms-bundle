<?php

namespace Riverway\Cms\CoreBundle\Controller\Admin;

use Doctrine\ORM\EntityManager;
use FOS\RestBundle\Controller\FOSRestController;
use Riverway\Cms\CoreBundle\Dto\CategoryDto;
use Riverway\Cms\CoreBundle\Entity\Category;
use Riverway\Cms\CoreBundle\Entity\MenuNode;
use Riverway\Cms\CoreBundle\Enum\WidgetTypeEnum;
use Riverway\Cms\CoreBundle\Form\CategoryType;
use Riverway\Cms\CoreBundle\Repository\MenuNodeRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends FOSRestController
{
    /**
     * @Route("/category/index", name="category_index")
     */
    public function indexAction(Request $request)
    {
        $qb = $this->getDoctrine()->getRepository('RiverwayCmsCoreBundle:Category')->createQueryBuilder('a');

        // replace this example code with whatever you need
        return $this->render('@RiverwayCmsCore/admin/category/index.html.twig', [
            'grid_config' => [
                'id',
                'name',
                'type' => [
                    'value' => function (Category $row, $index) {
                        return $this->get('translator')->trans($row->getType()->getKey());
                    },
                ],
                'actions' => [
                    'value' => function (Category $category) {
                        return $this->renderView(
                            'RiverwayCmsCoreBundle:admin/category:_actions.html.twig',
                            [
                                'object' => $category,
                            ]
                        );
                    },
                    'no_report' => true,
                ],
            ],
            'query' => $qb->getQuery(),
        ]);
    }

    /**
     * @Route("/category/{id}/edit", name="category_edit")
     */
    public function editAction(Category $category, Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $dto = $category->createPreparedDto();
        $form = $this->createForm(CategoryType::class, $dto, ['id' => $category->getId()]);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $dto = $form->getData();
                $category->updateFromDTO($dto);
                $em->getRepository('RiverwayCmsCoreBundle:MenuNode')->addCategoryToParentMenuNodes($category);
                $em->persist($category);
                $em->flush();
                return $this->handleView($this->routeRedirectView('category_edit', ['id' => $category->getId()]));
            }
        }

        return $this->render('@RiverwayCmsCore/admin/category/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("category/create", name="category_create")
     */
    public function createAction(Request $request)
    {
        $dto = new CategoryDto();

        $form = $this->createForm(CategoryType::class, $dto, [
            'action' => $this->generateUrl('category_create'),
        ]);
        $form->handleRequest($request);
        /**
         * @var EntityManager $em
         */
        $em = $this->getDoctrine()->getManager();
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $dto = $form->getData();
                $category = Category::createFromDto($dto);
                $em->persist($category);
                $em->flush();
                $em->getRepository('RiverwayCmsCoreBundle:MenuNode')->addCategoryToParentMenuNodes($category);
                return $this->handleView($this->routeRedirectView('category_index'));
            }
        }
        return $this->render('@RiverwayCmsCore/admin/ajax-entity-form.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/category/{id}/{menu}/add-to-menu", name="category_add_to_menu")
     */
    public function addToMenuAction(Category $category, MenuNode $menu, Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        /** @var MenuNodeRepository $menuRepo */
        $menuRepo = $em->getRepository('RiverwayCmsCoreBundle:MenuNode');

        $parentMenu = null;
        if (!$category->isRoot()) {
            $parentMenu = $menuRepo->findOneBy([
                'category' => $category->getParent(),
                'parentMenu' => $menu,
            ]);
        }
        if (!$parentMenu) {
            $parentMenu = $menu;
        }
        $menuRepo->addCategoryToMenu($category, $parentMenu, $menu);

        return $this->handleView($this->routeRedirectView('menu_edit', ['id' => $menu->getId()]));
    }

    /**
     * @Route("category/{id}/{menu}/remove-from-menu", name="category_remove_from_menu")
     */
    public function removeFromMenuAction(Category $category, MenuNode $menu, Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $node = $em->getRepository('RiverwayCmsCoreBundle:MenuNode')->findOneBy([
            'category' => $category,
            'parentMenu' => $menu,
        ]);

        $em->remove($node);
        $em->flush();

        return $this->handleView($this->routeRedirectView('menu_edit', ['id' => $menu->getId()]));
    }
}
