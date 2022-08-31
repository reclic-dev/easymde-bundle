<?php

namespace Reclic\EasyMDEBundle\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclicEasyMDEType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'attr' => [
                'data-toolbar' => 'heading, bold, italic, |, unordered-list, ordered-list, |, link, image, |, preview, side-by-side'
            ]
        ]);
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['attr']['class'] = 'form-control easymde';
        $view->vars['easymde'] = $view->vars['id'];
    }

    public function getBlockPrefix()
    {
        return 'easymde';
    }

    public function getParent()
    {
        return TextareaType::class;
    }
}
