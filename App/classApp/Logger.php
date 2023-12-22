<?php

use classApp\interfaces\IDeliver;
use classApp\interfaces\IFormat;

require_once __DIR__ . '/../../vendor/autoload.php';



class Logger
{
    public function __construct(protected IFormat $format, protected IDeliver $delivery)
    {
        $this->log($format);
    }

    public function log($string)
    {
        $this->delivery->deliver($this->format->format($string));
    }
}



