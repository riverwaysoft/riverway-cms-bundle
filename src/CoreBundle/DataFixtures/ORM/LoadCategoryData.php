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

use Riverway\Cms\CoreBundle\Entity\Category;
use Riverway\Cms\CoreBundle\Enum\CategoryEnum;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCategoryData implements FixtureInterface, OrderedFixtureInterface
{

    public function getOrder()
    {
        return 2;
    }

    public function load(ObjectManager $manager)
    {
        $servicesRoot = new Category(CategoryEnum::SERVICE(), 'LOCKSMITH SERVICES');
        $manager->persist($servicesRoot);

//        $productRoot = new Category(CategoryEnum::PRODUCT(), 'AUDIO, VIDEO AND DOOR ENTRY');
//        $productRoot->markAsRoot();
//        $manager->persist($productRoot);

        $object1 = new Category(CategoryEnum::SERVICE(), 'Lock Out');
        $object1->changeParent($servicesRoot);
        $manager->persist($object1);

        $object2 = new Category(CategoryEnum::SERVICE(), 'Lock Change');
        $object2->changeParent($servicesRoot);
        $manager->persist($object2);

        $object3 = new Category(CategoryEnum::SERVICE(), 'Lock Repair');
        $object3->changeParent($servicesRoot);
        $manager->persist($object3);

        $object4 = new Category(CategoryEnum::PRODUCT(), 'Burglar alarm');
        $object4->updateExternalId(3);
        $manager->persist($object4);


        $manager->flush();
    }

}
