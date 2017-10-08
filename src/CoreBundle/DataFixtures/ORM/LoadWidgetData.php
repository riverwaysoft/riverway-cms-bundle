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

use Riverway\Cms\CoreBundle\Entity\Widget;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Riverway\Cms\CoreBundle\Form\EditorWidgetType;
use Riverway\Cms\CoreBundle\Widget\Realisation\EditorWidget;

class LoadWidgetData implements FixtureInterface, OrderedFixtureInterface
{

    public function getOrder()
    {
        return 15;
    }

    public function load(ObjectManager $manager)
    {
        $manager->clear();
        $object = new Widget(EditorWidget::class);
        $object->fillFromArrayData([
            'sidebar' => $manager->find('RiverwayCmsCoreBundle:Sidebar', 1),
            'html_content' => '<p>Hello world!</p>',
        ]);
        $manager->persist($object);

        $objectA = new Widget(EditorWidget::class);
        $objectA->fillFromArrayData([
            'article' => $manager->find('RiverwayCmsCoreBundle:Article', 1),
            'html_content' => '<p>Article world!</p>',
        ]);
        $manager->persist($objectA);

        $manager->flush();
    }

}
