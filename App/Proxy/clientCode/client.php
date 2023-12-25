<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

use Proxy\IRequest;
use Proxy\ProxyServer;
use Proxy\Service;

function clientCode(IRequest $obj)
{
     $obj->request();
}

$ser = new Service();
$proxy = new ProxyServer($ser);
clientCode($proxy);
