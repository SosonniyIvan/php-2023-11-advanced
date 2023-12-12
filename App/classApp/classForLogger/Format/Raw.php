<?php

namespace classApp\classForLogger\Format;

require_once __DIR__ . '/../../../../vendor/autoload.php';

use classApp\interfaces\IFormat;

class Raw implements IFormat
{
    public function format($string)
    {
        return $string;
    }
}