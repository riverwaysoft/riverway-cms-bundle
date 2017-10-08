<?php

namespace Riverway\Cms\CoreBundle\Enum;

use MyCLabs\Enum\Enum;


/**
 * @method static WidgetTypeEnum DRAFT()
 * @method static WidgetTypeEnum PUBLISHED()
 */
class ArticleStatusEnum extends Enum
{
    const DRAFT = 1;
    const PUBLISHED = 2;
}