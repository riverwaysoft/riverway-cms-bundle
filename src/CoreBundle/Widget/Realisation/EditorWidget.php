<?php

namespace Riverway\Cms\CoreBundle\Widget\Realisation;

use Riverway\Cms\CoreBundle\Dto\EditorWidgetDto;
use Riverway\Cms\CoreBundle\Form\EditorWidgetType;
use Riverway\Cms\CoreBundle\Repository\WidgetRepository;
use Riverway\Cms\CoreBundle\Widget\AbstractWidgetRealisation;
use Riverway\Cms\CoreBundle\Widget\EditableWidgetInterface;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Twig\TwigEngine;
use Symfony\Component\Form\FormFactory;
use Symfony\Component\Form\FormInterface;

final class EditorWidget extends AbstractWidgetRealisation implements EditableWidgetInterface
{
    private $formFactory;

    public function __construct(FormFactory $formFactory)
    {
        $this->formFactory = $formFactory;
    }

    public function createForm(array $options = []): FormInterface
    {
        $dto = new EditorWidgetDto();
        $dto->content = $this->entity->getHtmlContent();
        return $this->formFactory->create(EditorWidgetType::class, $dto, $options);
    }

    public function handleForm(FormInterface $form)
    {
        $entity = $this->entity;
        $entity->setHtmlContent($form->getData()->content);
        $this->repo->saveWidget($entity);
    }

    public function getAdminPreview(): string
    {
        return substr(strip_tags($this->entity->getHtmlContent()), 0, 10) . '...';
    }

    public function getContent(): string
    {
        return $this->entity->getHtmlContent();
    }

}