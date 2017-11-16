<?php

namespace Riverway\Cms\CoreBundle\Form;

use Riverway\Cms\CoreBundle\Entity\Widget;
use Riverway\Cms\CoreBundle\Widget\AbstractWidgetRealisation;
use Riverway\Cms\CoreBundle\Widget\WidgetInterface;
use Riverway\Cms\CoreBundle\Widget\WidgetRegistry;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WidgetType extends AbstractType
{
    private $widgetRegistry;

    public function __construct(WidgetRegistry $widgetRegistry)
    {
        $this->widgetRegistry = $widgetRegistry;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sequence', HiddenType::class, ['label' => false]);
        foreach ($this->widgetRegistry->getWidgets() as $widget) {
            /** @var AbstractWidgetRealisation $widget */
            $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $formEvent) use ($widget) {
                /** @var Widget $data */
                $data = $formEvent->getData();
                if ($data->getName() === $widget->getName()) {
                    $widget->setEntity($data);
                    $widget->subscribePreSetData($formEvent);
                }
            });

            $builder->addEventListener(FormEvents::POST_SUBMIT,
                function (FormEvent $formEvent) use ($widget) {
                    /** @var Widget $entity */
                    $entity = $formEvent->getForm()->getData();
                    if ($entity->getName() === $widget->getName()) {
                        $widget->setEntity($entity);
                        $widget->subscribePostSubmit($formEvent);
                    }
                });
        }

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