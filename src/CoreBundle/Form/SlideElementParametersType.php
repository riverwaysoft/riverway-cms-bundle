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
            ->add('text', TextType::class)
            ->add('textColor', ChoiceType::class, [
                'choices' => [
                    'White' => '#fff',
                    'Black' => '#000'
                ]
            ])
            ->add('backColor', ChoiceType::class, [
                'choices' => [
                    'White' => '#fff',
                    'Black' => '#000'
                ]
            ])
            ->add('marginRight', RangeType::class, [
                'attr' => [
                    'min' => 0,
                    'max' => 90
                ]
            ])
            ->add('width', RangeType::class, [
                'attr' => [
                    'min' => 100,
                    'max' => 10
                ]
            ])
            ->add('url', TextType::class);
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