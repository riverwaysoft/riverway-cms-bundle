<?php

namespace Riverway\Cms\CoreBundle\Widget\Realisation;

use Riverway\Cms\CoreBundle\Entity\Widget;
use Riverway\Cms\CoreBundle\Form\Extension\ImperaviType;
use Riverway\Cms\CoreBundle\Widget\AbstractWidgetRealisation;
use Riverway\Cms\CoreBundle\Widget\WidgetFormTypeRegistry;
use Riverway\Cms\CoreBundle\Widget\WidgetInterface;
use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormFactory;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Environment;

final class FormWidget extends AbstractWidgetRealisation implements WidgetInterface
{
    private $formFactory;
    private $widgetFormTypeRegistry;
    private $router;
    private $twig;

    /**
     * FormWidget constructor.
     * @param FormFactory $formFactory
     * @param WidgetFormTypeRegistry $widgetFormTypeRegistry
     * @param Router $router
     * @param Environment $twig
     */
    public function __construct(FormFactory $formFactory, WidgetFormTypeRegistry $widgetFormTypeRegistry, Router $router, Environment $twig)
    {
        $this->formFactory = $formFactory;
        $this->widgetFormTypeRegistry = $widgetFormTypeRegistry;
        $this->router = $router;
        $this->twig = $twig;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        $formTypeClass = $this->entity->getExtraDataByKey('formType');
        $formTypeInfo = $this->widgetFormTypeRegistry->getFormTypeInfoByKey($formTypeClass);

        $dtoClassName = $formTypeInfo['dto_class'];
        $action = $formTypeInfo['action'];

        $form = $this->formFactory->create($formTypeClass, new $dtoClassName, [
            'action' => $this->router->generate($action, [], UrlGeneratorInterface::ABSOLUTE_PATH)
        ]);

        return $this->twig->render('@RiverwayCmsCore/ajax-entity-form.html.twig', array(
                'form' => $form->createView(),
        ));
    }

    /**
     * @param FormEvent $event
     */
    public function subscribePreSetData(FormEvent $event)
    {
        $choices = $this->widgetFormTypeRegistry->getFormTypeClasses();

        $form = $event->getForm();
        $form->add('extraData', ChoiceType::class, [
            'label' => false,
            'mapped' => false,
            'choices' => $choices,
            'placeholder' => 'Choose an option',
            'data' => $this->entity->getExtraDataByKey('formType') ? $this->entity->getExtraDataByKey('formType') : ''
        ]);
    }

    /**
     * @param FormEvent $event
     */
    public function subscribePostSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $this->entity->setExtraData(['formType' => $data['extraData']]);
    }

    public function addForm(){

    }
}