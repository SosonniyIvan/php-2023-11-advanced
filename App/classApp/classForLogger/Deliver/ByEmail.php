<?php

namespace classApp\classForLogger\Deliver;
require_once __DIR__ . '/../../../../vendor/autoload.php';

use classApp\interfaces\IDeliver;

class ByEmail implements IDeliver
{

    public function deliver($format): void
    {
        echo "Вивід формату ({$format}) по імейл";
    }
}