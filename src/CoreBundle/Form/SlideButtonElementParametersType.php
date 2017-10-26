<?php

namespace Riverway\Cms\CoreBundle\Form;

use Riverway\Cms\CoreBundle\Entity\SlideButtonElementParameters;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SlideButtonElementParametersType extends SlideElementParametersType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add('bgColor', ChoiceType::class, [
                'choices' => [
                    'White' => '#FFFFFF',
                    'Black' => '#000000',
                ],
                'choice_attr' => function($val, $key, $index) {
                    return ['data-color' => $val];
                },
                'attr' => [
                    'class' => 'colorselector'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => SlideButtonElementParameters::class,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_slide_button_element_parameters';
    }
}