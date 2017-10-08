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

use Riverway\Cms\CoreBundle\Entity\Sidebar;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadSidebarData implements FixtureInterface, OrderedFixtureInterface
{

    public function getOrder()
    {
        return 5;
    }

    public function load(ObjectManager $manager)
    {
        $object = new Sidebar();
        $object->setName('Sidebar #1');
        $manager->persist($object);
        $manager->flush();
    }

}
