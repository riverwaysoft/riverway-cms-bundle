<?php

namespace Riverway\Cms\CoreBundle\Form;

use Riverway\Cms\CoreBundle\Entity\Slide;
use Riverway\Cms\CoreBundle\Enum\SliderTextAlignEnum;
use Riverway\Cms\CoreBundle\Enum\SliderVerticalAlignEnum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SlideType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('header', SlideElementParametersType::class)
            ->add('subHeader', SlideElementParametersType::class)
            ->add('description', SlideElementParametersType::class)
            ->add('button', SlideElementParametersType::class)
            ->add('textAlign', ChoiceType::class, [
                'choices' => SliderTextAlignEnum::toArray()
            ])
            ->add('verticalAlign', ChoiceType::class, [
                'choices' => SliderVerticalAlignEnum::toArray()
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
            ->add('url', TextType::class, [
                'required' => false
            ])
            ->add('imageUrl', HiddenType::class, ['label' => false]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Slide::class,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_slide';
    }
}