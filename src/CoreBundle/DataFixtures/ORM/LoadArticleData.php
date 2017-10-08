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


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Riverway\Cms\CoreBundle\Entity\Article;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadArticleData implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface
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

        $object = new Article();
        $object->createFromArrayData([
            'template' => 'POST',
            'title' => 'Article 1',
            'uri' => '/test-article',
            'sidebar' => $manager->find('RiverwayCmsCoreBundle:Sidebar', 1),
            'status' =>'PUBLISHED',
            'featuredImage' => '/uploads/test/article_1.png',
        ]);
        $manager->persist($object);
        $manager->flush();
    }

}
