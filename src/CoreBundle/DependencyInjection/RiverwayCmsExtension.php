<?php

namespace Riverway\Cms\CoreBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;

class RiverwayCmsExtension extends Extension
{
    /**
     * Handles the riverway_cms configuration.
     *
     * @param array            $configs   The configurations being loaded
     * @param ContainerBuilder $container
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('cms.xml');

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('riverway_cms.google_geocode_api_key', $config['google_geocode_api_key']);
    }
}
