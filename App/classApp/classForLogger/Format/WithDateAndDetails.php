<?php

namespace classApp\classForLogger\Format;

require_once __DIR__ . '/../../../../vendor/autoload.php';

use classApp\interfaces\IFormat;

class WithDateAndDetails implements IFormat
{
    public function format($string)
    {
        return date('Y-m-d H:i:s') . $string . ' - With some details';
    }
}