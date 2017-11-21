<?php

namespace Riverway\Cms\CoreBundle\Enum;

use MyCLabs\Enum\Enum;


/**
 * @method static TemplateEnum POST()
 * @method static TemplateEnum PAGE()
 * @method static TemplateEnum CUSTOM_FULL()
 * @method static TemplateEnum CUSTOM_ONE_THIRD_RS()
 * @method static TemplateEnum CUSTOM_ONE_THIRD_LS()
 * @method static TemplateEnum TESTIMONIALS()
 * @method static TemplateEnum SERVICE()
 */
class TemplateEnum extends Enum
{
    const POST = 'post.html.twig';
    const PAGE = 'page.html.twig';
    const CUSTOM_FULL = 'custom/full.html.twig';
    const CUSTOM_ONE_THIRD_RS = 'custom/one_third_rs.html.twig';
    const CUSTOM_ONE_THIRD_LS = 'custom/one_third_ls.html.twig';
    const TESTIMONIALS = 'testimonials.html.twig';
    const SERVICE = 'service.html.twig';
}