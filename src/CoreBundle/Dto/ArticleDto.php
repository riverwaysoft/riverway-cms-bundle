<?php

namespace Riverway\Cms\CoreBundle\Dto;

use Riverway\Cms\CoreBundle\Enum\TemplateEnum;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

class ArticleDto
{
    public $title;
    public $titleIcon;
    /** @Assert\NotBlank(groups={"update"}) */
    public $template;
    public $uri;
    public $sidebar;
    public $widgets;
    public $category;
    public $featuredImage;
    public $tags;
    public $slider;
    public $metaDescription;
    public $metaKeywords;
    public $metaReferrer;

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('template', new Assert\Choice(['choices' => TemplateEnum::toArray(), 'groups'=>['update']]));
    }
}