<?php
namespace Riverway\Cms\CoreBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class FixturesReloadCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('riverway:fixtures:reload')
            ->setDescription('Drop/Create Database and load Fixtures ....')
            ->setDefinition(
                [
                    new InputOption(
                        'use-migration-instead-of-recreate-scheme',
                        'm',
                        InputOption::VALUE_NONE
                    ),
                ]
            )
            ->setHelp('This command allows you to load dummy data by recreating database and loading fixtures...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $application = $this->getApplication();
        $application->setAutoExit(false);
        if (!$input->getOption('use-migration-instead-of-recreate-scheme')) {

            $output->writeln([
                '===================================================',
                '*********        Dropping DataBase        *********',
                '===================================================',
                '',
            ]);

            $options = array('command' => 'doctrine:database:drop', "--force" => true, '--quiet' => true);
            $application->run(new \Symfony\Component\Console\Input\ArrayInput($options));


            $output->writeln([
                '===================================================',
                '*********        Creating DataBase        *********',
                '===================================================',
                '',
            ]);

            $options = array('command' => 'doctrine:database:create', "--if-not-exists" => true, '--quiet' => true);
            $application->run(new \Symfony\Component\Console\Input\ArrayInput($options));

            $output->writeln([
                '===================================================',
                '*********         Updating Schema         *********',
                '===================================================',
                '',
            ]);
            //Create de Schema
            $options = array('command' => 'doctrine:schema:create', '--quiet'=>true);
            $application->run(new \Symfony\Component\Console\Input\ArrayInput($options));

            $output->writeln([
                '===================================================',
                '*********          Load Fixtures          *********',
                '===================================================',
                '',
            ]);
        } else {
            $command = $this->getApplication()->find('doctrine:mi:mi');
            $input = new ArrayInput(
                [
                    'command' => 'doctrine:mi:mi',
                    '-n' => true,
                ]
            );
            $command->run($input, $output);
        }


        //Loading Fixtures
        $options = array('command' => 'doctrine:fixtures:load',"--no-interaction" => true);
        $application->run(new \Symfony\Component\Console\Input\ArrayInput($options));

    }
}