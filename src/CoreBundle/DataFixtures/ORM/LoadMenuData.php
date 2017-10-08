<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) 2011-2017 Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Riverway\Cms\CoreBundle\DataFixtures\ORM;

use Riverway\Cms\CoreBundle\Entity\MenuNode;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadMenuData implements FixtureInterface, OrderedFixtureInterface
{

    public function getOrder()
    {
        return 25;
    }

    public function load(ObjectManager $manager)
    {
        $mainMenu = $manager->getRepository('RiverwayCmsCoreBundle:MenuNode')->initializeMainMenu();

        $articleNode = new MenuNode('article');
        $articleNode->setArticle($manager->find('RiverwayCmsCoreBundle:Article', 1));
        $articleNode->setParent($mainMenu);
        $articleNode->setParentMenu($mainMenu);
        $manager->persist($articleNode);

        $manager->flush();
    }

}
