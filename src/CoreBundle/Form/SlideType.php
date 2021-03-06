<?php

namespace Riverway\Cms\CoreBundle\Form;

use Riverway\Cms\CoreBundle\Dto\SlideDto;
use Riverway\Cms\CoreBundle\Enum\SliderTextAlignEnum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
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
            ->add('button', SlideButtonElementParametersType::class)
            ->add('display', CheckboxType::class, ['required' => false])
            ->add('textAlign', ChoiceType::class, [
                'choices' => SliderTextAlignEnum::toArray()
            ])
            ->add('marginTop', RangeType::class, [
                'attr' => [
                    'min' => 0,
                    'max' => 40
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
                    'max' => 100,
                    'min' => 10
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
            'data_class' => SlideDto::class,
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