<?php

namespace Riverway\Cms\CoreBundle\Widget\Realisation;

use Riverway\Cms\CoreBundle\Widget\AbstractWidgetRealisation;
use Riverway\Cms\CoreBundle\Widget\WidgetInterface;

final class EditorWidget extends AbstractWidgetRealisation implements WidgetInterface
{

    public function getContent(): string
    {
        return (string)$this->entity->getHtmlContent();
    }

}