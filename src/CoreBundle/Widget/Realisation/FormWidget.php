<?php

namespace Riverway\Cms\CoreBundle\Widget\Realisation;

use Riverway\Cms\CoreBundle\Entity\Widget;
use Riverway\Cms\CoreBundle\Form\Extension\ImperaviType;
use Riverway\Cms\CoreBundle\Widget\AbstractWidgetRealisation;
use Riverway\Cms\CoreBundle\Widget\WidgetInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormEvent;

final class FormWidget extends AbstractWidgetRealisation implements WidgetInterface
{
    public function getContent(): string
    {
//        return (string)$this->entity->getHtmlContent();
    }

    public function subscribePreSetData(FormEvent $event)
    {
        $form = $event->getForm();
        $form->add('extraData', ChoiceType::class, [
            'label' => false,
            'mapped' => false,
            'choices' => ['contact' => 1, 'test' => 2],
            'placeholder' => 'Choose an option',
            'data' => 1
        ]);
    }

    public function subscribePostSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $this->entity->setExtraData(['formType' => $data['extraData']]);
    }
}