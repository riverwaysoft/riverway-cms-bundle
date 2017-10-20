<?php

namespace Riverway\Cms\CoreBundle\Form;

use Riverway\Cms\CoreBundle\Dto\ArticleDto;
use Riverway\Cms\CoreBundle\Entity\Article;
use Riverway\Cms\CoreBundle\Entity\Category;
use Riverway\Cms\CoreBundle\Entity\Sidebar;
use Riverway\Cms\CoreBundle\Entity\Tag;
use Riverway\Cms\CoreBundle\Enum\TemplateEnum;
use Riverway\Cms\CoreBundle\Repository\CategoryRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Routing\Router;
use Tetranz\Select2EntityBundle\Form\Type\Select2EntityType;

class ArticleType extends AbstractType
{
    private $entityManager;
    private $router;

    public function __construct(EntityManager $entityManager, Router $router)
    {
        $this->entityManager = $entityManager;
        $this->router = $router;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /** @var Article $article */
        $article = $options['article'];
        $builder
            ->add('title', TextType::class)
            ->add('template', ChoiceType::class, [
                'choices' => TemplateEnum::toArray(),
                'expanded' => true,
                'multiple' => false,
            ]);
        if (in_array('update', $options['validation_groups'])) {
            $builder->add('uri', TextType::class)
                ->add('titleIcon', TextType::class, [
                    'attr' => ['class' => 'icp icp-auto'],
                    'required' => false,
                ])
                ->add('widgets', CollectionType::class, [
                    'entry_type' => WidgetSequenceType::class,
                    'label' => false,
                    'entry_options' => [
                        'label' => false,
                    ],
                ]);
            if ($article) {
                $builder->add('featuredImage', HiddenType::class, [
                    'required' => false,
                    'label' => false,
                ]);
            }
            $builder->add('category', EntityType::class, [
                'class' => Category::class,
                'query_builder' => function (CategoryRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->andWhere('c.parent IS NULL');
                },
                'choices' => $this->entityManager->getRepository('RiverwayCmsCoreBundle:Category')->findGrouped(),
                'required' => false,
            ])
                ->add('tags', Select2EntityType::class,
                    [
                        'class' => Tag::class,
                        'multiple' => true,
                        'remote_route' => 'find_tags',
                        'text_property' => 'name',
                        'allow_add' => [
                            'enabled' => true,
                            'new_tag_text' => ' (NEW)',
                            'new_tag_prefix' => '__',
                            'tag_separators' => '[","]',
                        ],
                    ])
                ->add('sidebar', EntityType::class, [
                    'class' => Sidebar::class,
                    'choice_label' => 'name',
                    'placeholder' => 'none',
                    'required' => false,
                ]);
        }
        $builder->add('save', SubmitType::class);


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => ArticleDto::class,
            'article' => null,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_article';
    }
}