<?php

namespace Riverway\Cms\CoreBundle\Enum;

use MyCLabs\Enum\Enum;


/**
 * @method static ArticleStatusEnum DRAFT()
 * @method static ArticleStatusEnum PUBLISHED()
 */
class ArticleStatusEnum extends Enum
{
    const DRAFT = 1;
    const PUBLISHED = 2;
}