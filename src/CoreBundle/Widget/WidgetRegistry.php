<?php
/**
 * Created by PhpStorm.
 * User: mitalcoi
 * Date: 26.08.17
 * Time: 19:31
 */

namespace Riverway\Cms\CoreBundle\Widget;

use Riverway\Cms\CoreBundle\Entity\Widget;

class WidgetRegistry
{
    private $widgets;

    public function __construct()
    {
        $this->widgets = [];
    }

    public function createWidget(Widget $entity): WidgetInterface
    {
        if (!isset($this->widgets[$entity->getName()])) {
            throw new \LogicException("{$entity->getName()} not well configured!");
        }
        $widget = $this->widgets[$entity->getName()];
        $widget->setEntity($entity);

        return $widget;
    }

    public function getWidgetList(): array
    {
        return array_keys($this->widgets);
    }

    public function addWidget(WidgetInterface $widget)
    {
        $this->widgets[$widget->getName()] = $widget;
    }
}