<?php

namespace Riverway\Cms\CoreBundle\Controller\Admin;

use Riverway\Cms\CoreBundle\Entity\MenuNode;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class MenuController extends Controller
{
    /**
     * @Route("/menu/index", name="admin_menu_index")
     */
    public function indexAction(Request $request)
    {

        $qb = $this->get('doctrine.orm.entity_manager')->getRepository('RiverwayCmsCoreBundle:MenuNode')->createQueryBuilder('m');
        $qb->leftJoin('m.parent', 'p')->andWhere("p.name='root'");

        return $this->render('@RiverwayCmsCore/admin/menu/index.html.twig', [
            'grid_config' => [
                'id',
                'name',
                'actions' => [
                    'value' => function (MenuNode $menu) {
                        return $this->renderView(
                            '@RiverwayCmsCore/admin/menu/_actions.html.twig',
                            [
                                'object' => $menu,
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
     * @Route("/menu/{id}/edit", name="menu_edit")
     */
    public function editAction(MenuNode $menu)
    {
        $em = $this->get('doctrine.orm.entity_manager');

        $categories = $em->getRepository('RiverwayCmsCoreBundle:Category')->findNotInMenu($menu);

        return $this->render('@RiverwayCmsCore/admin/menu/edit.html.twig', [
            'menu' => $menu,
            'categories' => $categories,
        ]);
    }

    /**
     * @Route("menu/{id}/rearrange", name="menu_rearrange")
     */
    public function rearrangeMenuAction(Request $request, MenuNode $menu)
    {
        $menuData = $request->request->get('menu');

        foreach ($menuData as $child) {
            $this->setNode($child, $menu);
        }
        $this->get('doctrine.orm.entity_manager')->flush();
        return new JsonResponse(['status' => 'success']);
    }

    /**
     * @param array $data
     * @param MenuNode $parent
     */
    private function setNode(array $data, MenuNode $parent)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        /** @var MenuNode $node */
        $node = $em->getRepository('RiverwayCmsCoreBundle:MenuNode')->find($data['id']);
        $node->setParent($parent);

        if (isset($data['children'])) {
            foreach ($data['children'] as $child) {
                $this->setNode($child, $node);
            }
        }
    }

}