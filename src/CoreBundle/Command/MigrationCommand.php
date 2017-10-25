<?php

namespace Riverway\Cms\CoreBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class MigrationCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('riverway:migration:migrate')
            ->setDescription('Apply Riverway CMS migrations....')
            ->setHelp('This command allows you to apply cms-specific migrations...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $application = $this->getApplication();
        $application->setAutoExit(false);

        $command = $this->getApplication()->find('doctrine:mi:mi');
        $input = new ArrayInput(
            [
                'command' => 'doctrine:migration:migrate',
                '-n' => true,
                '--configuration' => __DIR__.'/../Resources/config/migration.yml',
            ]
        );
        $command->run($input, $output);

    }
}