<?php

namespace Riverway\Cms\CoreBundle\DependencyInjection\Compiler;

use Riverway\Cms\CoreBundle\Widget\WidgetFormTypeRegistry;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class WidgetFormTypeCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->has(WidgetFormTypeRegistry::class)) {
            return;
        }
        $definition = $container->findDefinition(WidgetFormTypeRegistry::class);
        $taggedServices = $container->findTaggedServiceIds('riverway.cms.widget.form_type');
        foreach ($taggedServices as $id => $tags) {
            foreach ($tags as $attributes) {
                $definition->addMethodCall('addFormType', array(
                    $id,
                    $attributes["action"],
                    $attributes["dto_class"]
                ));
            }
        }


    }
}