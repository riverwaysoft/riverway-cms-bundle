<?php

namespace Riverway\Cms\Context;

use Behat\Behat\Context\Context;
use Behat\Behat\Hook\Scope\AfterScenarioScope;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Symfony2Extension\Context\KernelAwareContext;
use Behatch\HttpCall\Request;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\SchemaTool;
use PHPUnit\Framework\TestCase;
use Riverway\Cms\CoreBundle\Entity\MenuNode;
use Riverway\Cms\CoreBundle\Entity\Widget;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\PropertyAccess\PropertyAccessor;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends \Behat\MinkExtension\Context\MinkContext implements Context, KernelAwareContext
{
    /**
     * @var KernelInterface
     */
    private $kernel;
    /**
     * @var \Doctrine\Common\Persistence\ObjectManager
     */
    private $manager;
    /**
     * @var SchemaTool
     */
    private $schemaTool;
    /**
     * @var array
     */
    private $classes;
    /**
     * @var Request\Goutte
     */
    private $request;
    private $application;
    private $pa;
    /** @var BufferedOutput */
    private $output;


    /**
     * FeatureContext constructor.
     *
     * @param ManagerRegistry $doctrine
     * @param Request $request
     */
    public function __construct(
        ManagerRegistry $doctrine,
        Request $request
    ) {
        $this->manager = $doctrine->getManager();
        $this->schemaTool = new SchemaTool($this->manager);
        $this->classes = $this->manager->getMetadataFactory()->getAllMetadata();
        $this->request = $request;
        $this->pa = new PropertyAccessor();
    }

    public static function runConsole(Application $application, $command, $options = [])
    {
        $options['-e'] = 'test';
        $options['-q'] = null;
        $options = array_merge($options, ['command' => $command]);

        return $application->run(new \Symfony\Component\Console\Input\ArrayInput($options));
    }

    /** @BeforeSuite */
    public static function beforeS($event)
    {
        if (file_exists(__DIR__.'/../../var/cache/screens')) {
            exec('rm -r '.__DIR__.'/../../var/cache/screens');
        }
        mkdir(__DIR__.'/../../var/cache/screens');
    }

    /**
     * Sets Kernel instance.
     * This method will be automatically called by Symfony2Extension ContextInitializer.
     *
     * @param KernelInterface $kernel
     */
    public function setKernel(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }

    public function getContainerService(string $id)
    {
        return $this->kernel->getContainer()->get($id);
    }


    /**
     * @When I run command :arg1 with options:
     */
    public function iRunCommandWithOptions($arg1, TableNode $table)
    {
        $this->application = new Application($this->kernel);
        $this->application->setAutoExit(false);
        $hash = $table->getRowsHash();

        $commandFind = $this->application->find($arg1);

        $options['-e'] = 'test';
        $options['-q'] = null;
        foreach ($hash as $i => $row) {
            if ($i === 'option') {
                continue;
            }
            $options[$i] = $row;
        }

        $options['command'] = $arg1;

        $this->output = new BufferedOutput();

        return $commandFind->run(new ArrayInput($options), $this->output);
    }

    /**
     * @When I run command :arg1
     */
    public function iRunCommand($arg1)
    {
        $this->application = new Application($this->kernel);
        $this->application->setAutoExit(false);

        $commandFind = $this->application->find($arg1);

        $this->output = new BufferedOutput();

        return $commandFind->run(new ArrayInput([$arg1]), $this->output);
    }

    /**
     * @When I run command :arg1 with arguments:
     */
    public function iRunCommandWithArguments($arg1, TableNode $table)//@TODO: need in refactor
    {
        $this->application = new Application($this->kernel);
        $this->application->setAutoExit(false);
        $commandFind = $this->application->find($arg1);

        $args = $table->getRowsHash();
        unset($args['argument']);

        $options['-e'] = 'test';
        $options['-q'] = null;
        $commandInput = [
            'command' => $arg1,
        ];
        foreach ($args as $key => $val) {
            $commandInput[$key] = $val;
        }

        foreach ($options as $key => $val) {
            $commandInput[$key] = $val;
        }
        $this->output = new BufferedOutput();

        return $commandFind->run(new ArrayInput($commandInput), $this->output);
    }

    /**
     * @Then I should see response from console output:
     */
    public function iShouldSeeResFromConsole(PyStringNode $node)
    {
        TestCase::assertEquals($this->output->fetch(), $node->getRaw());
    }

    /**
     * @AfterScenario
     *
     * @param AfterScenarioScope $scope
     */
    public function screenshotOnFailure(AfterScenarioScope $scope)
    {
        if ($scope->getTestResult()->isPassed() === false) {
            file_put_contents($this->getImagePath().'.html', $this->getSession()->getPage()->getContent());
        }
    }

    /**
     * @Given entity :arg1 #:arg4 should have :arg2 in :arg3
     */
    public function entityShouldHaveIn($arg1, $arg2, $arg3, $arg4)
    {
        $entity = $this->manager->find($arg1, $arg4);
        TestCase::assertNotEmpty($entity);
        TestCase::assertEquals($arg3, $this->pa->getValue($entity, $arg2));
    }

    /**
     * @Given entity :arg1 #:arg4 should have :arg2 in date :arg3
     */
    public function entityShouldHaveInDate($arg1, $arg2, $arg3, $arg4)
    {
        $entity = $this->manager->find($arg1, $arg4);
        TestCase::assertNotEmpty($entity);
        TestCase::assertEquals(new \DateTime($arg3), $this->pa->getValue($entity, $arg2));
    }

    /**
     * @Given entity :arg1 #:arg2 should have :arg3 in :arg4#:arg6
     */
    public function entityShouldHaveRelationIn($arg1, $arg2, $arg3, $arg4, $arg5)
    {
        $entity = $this->manager->find($arg1, $arg2);
        $relation = $this->manager->find($arg4, $arg5);
        TestCase::assertNotEmpty($entity);
        TestCase::assertEquals($this->pa->getValue($entity, $arg3), $relation);
    }

    /**
     * @Then entity :arg1 #:arg2 should not exists
     */
    public function entityShouldNotExists($arg1, $arg2)
    {
        $entity = $this->manager->find($arg1, $arg2);
        TestCase::assertEmpty($entity);

    }

// TODO: FOR MenuNodeContext:

// TODO: make only for MenuNode entity

    /**
     * @Given entity :arg1 #:arg4 should have category type in :arg3
     */
    public function entityShouldHaveCategoryIn($arg1, $arg3, $arg4)
    {
        $entity = $this->manager->find($arg1, $arg4);
        TestCase::assertNotEmpty($entity);
        $cat = $this->pa->getValue($entity, 'category');
        $type = $cat->getType()->getValue();
        TestCase::assertEquals($arg3, $type);
    }

    /**
     * @Given entity :arg1 #:arg4 should have parent menu in :arg3
     */
    public function entityShouldHaveParentMenuFieldIn($arg1, $arg3, $arg4)
    {
        $entity = $this->manager->find($arg1, $arg4);
        TestCase::assertNotEmpty($entity);
        $parentMenu = $this->pa->getValue($entity, 'parentMenu');
        $parent = $parentMenu->getId();
        TestCase::assertEquals($arg3, $parent);
    }

    /**
     * @When entity Menu Node should have :arg2 fields
     */
    public function entityShouldHaveFields($quantity)
    {
        /**
         * @var MenuNode $menuNode
         */
        $menuNode = $this->manager->getRepository(MenuNode::class)->findAll();
        TestCase::assertCount($quantity, $menuNode);
    }

    /**
     * @Given entity Menu Node #:number should have parentId in :value
     */
    public function MenuNodeShouldHave($number, $value)
    {
        $menuNode = $this->manager->find(MenuNode::class, $number);
        TestCase::assertNotEmpty($menuNode);
        $parent = $menuNode->getParentId();
        TestCase::assertEquals($parent->getId(), $value);
    }

// TODO: FOR WidgetContext:

    /**
     * @Then entity Widget #:arg1 should have Article id in :arg2
     */
    public function entityWidgetShouldHaveArticleIdIn($arg1, $arg2)
    {
        $entity = $this->manager->find(Widget::class, $arg1);
        TestCase::assertNotEmpty($entity);
        TestCase::assertNotEmpty($entity->getArticle());
        TestCase::assertEquals($entity->getArticle()->getId(), $arg2);
    }

    /**
     * @Then entity Widget #:arg1 should have Sidebar id in :arg2
     */
    public function entityWidgetShouldHaveSidebarIdIn($arg1, $arg2)
    {
        $entity = $this->manager->find(Widget::class, $arg1);
        TestCase::assertNotEmpty($entity);
        TestCase::assertNotEmpty($entity->getSidebar());
        TestCase::assertEquals($entity->getSidebar()->getId(), $arg2);
    }

    private function getImagePath()
    {
        return __DIR__.'/../../var/cache/screens/'.time();
    }
}
