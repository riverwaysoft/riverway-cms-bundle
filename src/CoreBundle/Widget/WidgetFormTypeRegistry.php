<?php

namespace Riverway\Cms\CoreBundle\Widget;

class WidgetFormTypeRegistry
{
    private $formTypeClasses;
    private $formTypeInfo;

    public function __construct()
    {
        $this->formTypeClasses = [];
        $this->formTypeInfo = [];
    }

    /**
     * @param string $formTypeClass
     */
    public function addFormType(string $formTypeClass, $entityName, $dtoClass)
    {
        $this->formTypeClasses[$formTypeClass] = $formTypeClass;
        $this->formTypeInfo[$formTypeClass] = [
            'form_type_class' => $formTypeClass,
            'entity_name' => $entityName,
            'dto_class' => $dtoClass
        ];
    }

    /**
     * @return array
     */
    public function getFormTypeClasses(): array
    {
        return $this->formTypeClasses;
    }

    /**
     * @return array
     */
    public function getFormTypeInfo(): array
    {
        return $this->formTypeInfo;
    }

    /**
     * @return array|null
     */
    public function getFormTypeInfoByKey(string $formTypeClass): ?array
    {
        return array_key_exists($formTypeClass, $this->formTypeInfo) ?
            $this->formTypeInfo[$formTypeClass] : null;
    }
}