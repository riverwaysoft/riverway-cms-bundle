<?php

namespace Riverway\Cms\CoreBundle\Widget;

use Symfony\Component\Form\FormEvent;

interface WidgetInterface
{
    public function getName(): string;

    public function getContent(): string;

    public function getId(): int;

    public function subscribePreSetData(FormEvent $formEvent);

    public function getUniqueId(): string;
}