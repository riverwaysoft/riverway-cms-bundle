<?php

namespace Riverway\Cms\CoreBundle\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\PropertyAccess\PropertyAccess;

class ImageTypeExtension extends AbstractTypeExtension
{
    public function getExtendedType()
    {
        return FileType::class;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefined(array('image_property', 'delete_route'));
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $accessor = PropertyAccess::createPropertyAccessor();
        $parentData = $form->getParent()->getData();
        if ($parentData && isset($options['image_property'])) {
            $view->vars['image_url'] = $accessor->getValue($parentData, $options['image_property']);
        }
        if (isset($options['delete_route'])) {
            $view->vars['delete_route'] = $options['delete_route'];
        }
    }

}