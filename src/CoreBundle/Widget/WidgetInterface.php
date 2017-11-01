<?php

namespace Riverway\Cms\CoreBundle\Widget;

interface WidgetInterface
{
    public function getName(): string;

    public function getContent(): string;

    public function getId(): int;

    public function getUniqueId(): string;
}