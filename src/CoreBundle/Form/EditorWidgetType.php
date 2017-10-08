<?php

namespace Riverway\Cms\CoreBundle\Form;

use Riverway\Cms\CoreBundle\Dto\EditorWidgetDto;
use Riverway\Cms\CoreBundle\Entity\Widget;
use Riverway\Cms\CoreBundle\Form\Extension\ImperaviType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditorWidgetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', ImperaviType::class, ['label' => 'Content']);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_text_widget';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => EditorWidgetDto::class,
        ));
    }
}