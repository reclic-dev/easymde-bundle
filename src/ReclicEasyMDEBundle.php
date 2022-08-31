<?php

namespace Reclic\EasyMDEBundle;

use Reclic\EasyMDEBundle\DependencyInjection\Compiler\ReclicEasyMDEPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ReclicEasyMDEBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new ReclicEasyMDEPass());
    }
}
