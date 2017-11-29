<?php

namespace Riverway\Cms\CoreBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package Riverway\Cms\CoreBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree.
     *
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('riverway_cms_core');

        $rootNode
            ->children()
                ->scalarNode('google_geocode_api_key')->cannotBeEmpty()->defaultValue('')->end()
            ->end();

        return $treeBuilder;
    }
}
