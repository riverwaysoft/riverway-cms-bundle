<?php

namespace Riverway\Cms\CoreBundle\Utils;

class UrlGenerator
{
    public static function generateFromString(string $str, $prefix = '/') {
        $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
        $clean = strtolower(trim($clean, '-'));
        $clean = preg_replace("/[\/_|+ -]+/", '-', $clean);

        return $prefix . $clean;
    }
}