<?php

namespace Riverway\Cms\CoreBundle;

use Riverway\Cms\CoreBundle\DependencyInjection\Compiler\WidgetCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class RiverwayCmsCoreBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new WidgetCompilerPass());
    }
}
