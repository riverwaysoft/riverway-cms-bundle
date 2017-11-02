<?php

namespace Riverway\Cms\CoreBundle\Form;

use Riverway\Cms\CoreBundle\Entity\Widget;
use Riverway\Cms\CoreBundle\Form\Extension\ImperaviType;
use Riverway\Cms\CoreBundle\Widget\Realisation\EditorWidget;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WidgetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sequence', HiddenType::class, ['label' => false]);
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event) use ($builder) {
            /** @var Widget $entity */
            $entity = $event->getData();
            $form = $event->getForm();

            if ($entity->getName() === EditorWidget::class) {
                $form->add('htmlContent', ImperaviType::class, ['label' => false]);
            }
        });

    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_widget_sequence';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Widget::class,
        ));
    }
}