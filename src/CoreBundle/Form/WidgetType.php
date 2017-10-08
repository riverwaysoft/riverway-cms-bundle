<?php

namespace Riverway\Cms\CoreBundle\Form;

use Riverway\Cms\CoreBundle\Entity\Widget;
use Riverway\Cms\CoreBundle\Enum\WidgetTypeEnum;
use Riverway\Cms\CoreBundle\Widget\WidgetRegistry;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WidgetType extends AbstractType
{
    private $registry;

    public function __construct(WidgetRegistry $registry)
    {
        $this->registry = $registry;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sequence', HiddenType::class, ['label' => false])
            ->add('type', ChoiceType::class, [
                'choices' => $this->registry->getWidgetList(),
            ])
            ->add('sidebar', EntityType::class, ['class' => 'Riverway\Cms\CoreBundle\Entity\Sidebar']);
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