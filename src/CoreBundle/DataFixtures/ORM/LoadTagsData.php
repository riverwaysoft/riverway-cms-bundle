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

use Riverway\Cms\CoreBundle\Entity\Article;
use Riverway\Cms\CoreBundle\Entity\Tag;
use Riverway\Cms\CoreBundle\Enum\ArticleStatusEnum;
use Riverway\Cms\CoreBundle\Enum\TemplateEnum;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadTagsData implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface
{
    /** @var  ContainerInterface */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function getOrder()
    {
        return 10;
    }

    public function load(ObjectManager $manager)
    {
        $manager->clear();

        $object = new Tag();
        $object->createFromArrayData([
            'name' => 'home',
        ]);
        $manager->persist($object);

        $object = new Tag();
        $object->createFromArrayData([
            'name' => 'street',
        ]);
        $manager->persist($object);
        $manager->flush();
    }

}
