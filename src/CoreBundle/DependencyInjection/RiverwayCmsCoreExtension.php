<?php

namespace Riverway\Cms\CoreBundle\DependencyInjection;

use Riverway\Cms\CoreBundle\Service\CrimeMap\CrimeMapManager;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;

class RiverwayCmsCoreExtension extends Extension
{
    /**
     * Handles the riverway_cms configuration.
     *
     * @param array            $configs   The configurations being loaded
     * @param ContainerBuilder $container
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
        $container->findDefinition(CrimeMapManager::class)
            ->replaceArgument(0, $config['google_geocode_api_key']);
    }
}
