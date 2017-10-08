<?php

namespace Riverway\Cms\CoreBundle\Dto;

use Riverway\Cms\CoreBundle\Entity\Article;
use Riverway\Cms\CoreBundle\Enum\TemplateEnum;

class CategoryDto
{
    public $name;
    public $type;
    public $parent;
    public $isRoot;
}