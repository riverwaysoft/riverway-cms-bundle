<?php
/**
 * Created by PhpStorm.
 * User: anatolij
 * Date: 08.11.17
 * Time: 0:46
 */

namespace Riverway\Cms\CoreBundle\Enum;


use MyCLabs\Enum\Enum;

class MetaReferrerEnum extends Enum
{
    const NONE_WHEN_DOWNGRADE='none-when-downgrade';
    const ORIGIN_WHEN_CROSSORIGIN='origin-when-crossorigin';
    const UNSAFE_URL='unsafe-url';
}