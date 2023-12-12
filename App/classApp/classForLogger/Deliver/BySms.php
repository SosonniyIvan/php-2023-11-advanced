<?php

namespace classApp\classForLogger\Deliver;

use classApp\interfaces\IDeliver;

class BySms implements IDeliver
{

    public  function deliver($format): void
    {
        echo "Вивід формату ({$format}) по смс";
    }
}