<?php

namespace Riverway\Cms\CoreBundle\Widget\Realisation;

use Riverway\Cms\CoreBundle\Entity\Widget;
use Riverway\Cms\CoreBundle\Form\Extension\ImperaviType;
use Riverway\Cms\CoreBundle\Widget\AbstractWidgetRealisation;
use Riverway\Cms\CoreBundle\Widget\WidgetInterface;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormEvent;

final class EditorWidget extends AbstractWidgetRealisation implements WidgetInterface
{

    public function getContent(): string
    {
        return (string)$this->entity->getHtmlContent();
    }

    public function subscribePreSetData(FormEvent $event)
    {
        /** @var Widget $entity */
        $entity = $event->getData();
        $form = $event->getForm();
        $form->add('htmlContent', ImperaviType::class, ['label' => false]);
    }

    public function subscribePostSubmit(FormEvent $event)
    {

    }
}