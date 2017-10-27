<?php

namespace Riverway\Cms\Context;

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\SchemaTool;
use Riverway\Cms\CoreBundle\Entity\Article;
use Riverway\Cms\CoreBundle\Entity\Category;
use Riverway\Cms\CoreBundle\Entity\MenuNode;
use Riverway\Cms\CoreBundle\Entity\Tag;
use Riverway\Cms\CoreBundle\Entity\Widget;
use Riverway\Cms\CoreBundle\Enum\CategoryEnum;
use Symfony\Bundle\FrameworkBundle\Console\Application;

/**
 * Defines application features from the specific context.
 */
class FixtureContext implements Context
{
    /**
     * @var EntityManager
     */
    protected $manager;
    /**
     * @var SchemaTool
     */
    private $schemaTool;
    /**
     * @var array
     */
    private $classes;

    /**
     * FeatureContext constructor.
     *
     * @param ManagerRegistry $doctrine
     */
    public function __construct(
        ManagerRegistry $doctrine
    ) {
        $this->manager = $doctrine->getManager();
        $this->schemaTool = new SchemaTool($this->manager);
        $this->classes = $this->manager->getMetadataFactory()->getAllMetadata();
    }

    /** @BeforeSuite */
    public static function beforeS($event)
    {
        $kernel = new \AppKernel('test', true);
        $kernel->boot();

        $application = new Application($kernel);
        $application->setAutoExit(false);
        try {
            FeatureContext::runConsole($application, 'doctrine:schema:drop',
                ['--force' => true, '--full-database' => true]);
        } catch (\Exception $e) {
        }
        FeatureContext::runConsole($application, 'doctrine:schema:create');
        $kernel->shutdown();
    }


    /**
     * @BeforeScenario
     */
    public function beforeScenario()
    {
        $this->schemaTool->dropSchema($this->classes);
        $this->schemaTool->createSchema($this->classes);
    }

    /**
     * @Given the following articles exist:
     */
    public function theArticleExist(TableNode $table)
    {
        foreach ($table->getHash() as $row) {
            $entity = new Article();
            $entity->createFromArrayData($row);
            $this->manager->persist($entity);
        }
        $this->manager->flush();
    }

    /**
     * @Given the following widgets exist:
     */
    public function theWidgetsExist(TableNode $table)
    {
        foreach ($table->getHash() as $row) {
            $entity = new Widget($row['name']);
            if (isset($row['article'])) {
                $row['article'] = $this->manager->find('RiverwayCmsCoreBundle:Article', $row['article']);
            }
            if (isset($row['sidebar'])) {
                $row['sidebar'] = $this->manager->find('RiverwayCmsCoreBundle:Sidebar', $row['sidebar']);
            }
            $entity->fillFromArrayData($row);
            $this->manager->persist($entity);
        }
        $this->manager->flush();
    }

    /**
     * @Given the following menu nodes exist:
     */
    public function theMenuExist(TableNode $table)
    {
        $mainMenu = $this->manager->getRepository('RiverwayCmsCoreBundle:MenuNode')->initializeMainMenu();
        foreach ($table->getHash() as $row) {
            $menuNode = new MenuNode($row['name']);
            if (isset($row['uri'])) {
                $menuNode->setUri($row['uri']);
            }
            if (isset($row['category'])) {
                $menuNode->setCategory($this->manager->find('RiverwayCmsCoreBundle:Category', $row['category']));
            }
            if (isset($row['menuNode'])) {
                $menuNode->setParentMenu($this->manager->find('RiverwayCmsCoreBundle:MenuNode', $row['menuNode']));
            }
            if (isset($row['article'])) {
                $menuNode->setArticle($this->manager->find('RiverwayCmsCoreBundle:Article', $row['article']));
            }
            $menuNode->setParent($mainMenu);
            $this->manager->persist($menuNode);
        }
        $this->manager->flush();
    }

    /**
     * @Given the following categories exist:
     */
    public function theCategoriesExist(TableNode $table)
    {
        foreach ($table->getHash() as $row) {
            $category = new Category(new CategoryEnum((int)$row['type']), $row['name']);
            $category->createPreparedDto($row);
            $this->manager->persist($category);
            $this->manager->flush();
        }
    }

    /**
     * @Given the following tags exist:
     */
    public function theTagsExist(TableNode $table)
    {
        foreach ($table->getHash() as $row) {
           $tag = new Tag();
           $tag->createFromArrayData($row);
           $this->manager->persist($tag);
        }
        $this->manager->flush();
    }
}
