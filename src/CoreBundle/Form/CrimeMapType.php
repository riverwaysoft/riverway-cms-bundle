<?php

namespace Riverway\Cms\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CrimeMapType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('address', TextType::class, [
                'mapped' => false,
                'data' => $options['address'],
                'attr' => [
                    'placeholder' => 'Enter Your Postcode',
                    'class' => 'crime-map-address'
                ],
                'label' => false
            ])
            ->add('crimes', HiddenType::class, [
                'mapped' => false,
                'data' => $options['crimes'],
                'attr' => [
                    'class' => 'crime-map-crimes'
                ]
            ])
            ->add('lat', HiddenType::class, [
                'mapped' => false,
                'data' => $options['lat'],
                'attr' => [
                    'class' => 'crime-map-lat'
                ]
            ])
            ->add('lng', HiddenType::class, [
                'mapped' => false,
                'data' => $options['lng'],
                'attr' => [
                    'class' => 'crime-map-lng'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Search',
                'attr' => [
                    'class' => 'crime-map-submit'
                ]
            ]);
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'address' => null,
            'crimes' => null,
            'lat' => null,
            'lng' => null,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_crime_map';
    }
}