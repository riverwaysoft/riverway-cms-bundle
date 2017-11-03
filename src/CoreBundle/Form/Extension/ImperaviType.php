<?php
/**
 * Created by PhpStorm.
 * User: mitalcoi
 * Date: 23.08.17
 * Time: 10:42
 */

namespace Riverway\Cms\CoreBundle\Form\Extension;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Routing\Router;

class ImperaviType extends AbstractType
{
    private $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['image_upload'] = $this->router->generate('image_redactor_upload');
        $view->vars['image_manager'] = $this->router->generate('image_redactor_manager');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'attr' => ['class' => 'imperavi-editor', 'style'=>'display:none'],
            'image_upload' => null,
            'image_manager' => null,
        ));
    }

    public function getParent()
    {
        return TextareaType::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'imperavi';
    }
}