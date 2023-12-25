<?php

namespace Proxy;

use Proxy\IRequest;

class Service implements IRequest
{
    public function request():mixed
    {
        $smth = PHP_EOL .'Виконання запиту';
        echo $smth;
        return $smth;
    }

}
