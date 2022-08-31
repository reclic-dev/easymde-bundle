<?php

namespace Reclic\EasyMDEBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ReclicEasyMDEPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $resources = $container->getParameter('twig.form.resources') ?? [];
        array_unshift($resources, '@ReclicEasyMDE/Type/field.html.twig');
        $container->setParameter('twig.form.resources', $resources);
    }
}
