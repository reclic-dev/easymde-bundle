<?php

namespace Reclic\EasyMDEBundle\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclicEasyMDEType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'attr' => [
                'class' => 'easymde'
            ]
        ]);
    }

    public function getParent()
    {
        return TextareaType::class;
    }
}
