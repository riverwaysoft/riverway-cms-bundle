<?php

namespace Riverway\Cms\CoreBundle\Widget;

use Symfony\Component\Form\FormInterface;

interface EditableWidgetInterface extends WidgetInterface
{
    public function createForm(array $options=[]): FormInterface;
    public function handleForm(FormInterface $form);
}