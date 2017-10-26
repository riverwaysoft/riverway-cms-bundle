<?php

namespace Riverway\Cms\CoreBundle\Form;

use Riverway\Cms\CoreBundle\Entity\SlideElementParameters;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SlideElementParametersType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('text', TextType::class, [
                'required' => false
            ])
            ->add('textColor', ChoiceType::class, [
                'choices' => [
                    'Black' => '#000000',
                    'White' => '#FFFFFF',
                ],
                'choice_attr' => function($val, $key, $index) {
                    return ['data-color' => $val];
                },
                'attr' => [
                    'class' => 'colorselector'
                ]
            ])
            ->add('marginLeft', RangeType::class, [
                'attr' => [
                    'min' => 0,
                    'max' => 90
                ]
            ])
            ->add('width', RangeType::class, [
                'attr' => [
                    'min' => 10,
                    'max' => 100
                ]
            ])
            ->add('url', TextType::class, [
                'required' => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => SlideElementParameters::class,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_slide_element_parameters';
    }
}