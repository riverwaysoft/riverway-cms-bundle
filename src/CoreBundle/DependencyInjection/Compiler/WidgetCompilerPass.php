<?php

namespace Riverway\Cms\CoreBundle\DependencyInjection\Compiler;

use Riverway\Cms\CoreBundle\Widget\WidgetRegistry;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class WidgetCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->has(WidgetRegistry::class)) {
            return;
        }
        $definition = $container->findDefinition(WidgetRegistry::class);
        $taggedServices = $container->findTaggedServiceIds('riverway.cms.widget');
        foreach ($taggedServices as $id => $tags) {
            $widgetDefinition = $container->findDefinition($id);
            $widgetDefinition->addMethodCall('setEntityManager', [new Reference('doctrine.orm.entity_manager')]);
            $widgetDefinition->addMethodCall('setTwigEngine', [new Reference('templating.engine.twig')]);

            $definition->addMethodCall('addWidget', [new Reference($id)]);
        }


    }
}