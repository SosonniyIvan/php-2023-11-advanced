<?php

namespace classApp\classForLogger\Deliver;

use classApp\interfaces\IDeliver;

class ToConsole implements IDeliver
{

    public function deliver($format): void
    {
        echo "Вивід формату ({$format}) у консоль";
    }
}