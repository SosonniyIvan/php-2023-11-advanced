<?php

namespace Proxy;

use Proxy\IRequest;
use Proxy\Service;

class ProxyServer implements IRequest
{

    public array $nums;
    protected  $service;


    public function __construct(Service $service)
    {
        $this->service = $service;
    }


    public function request(): mixed
    {
        $request = $this->service->request();
        $this->nums[] = [$request];
        $str = $request . ':' . $this->getRequest() . PHP_EOL;
        echo $str;
        return $str;
    }

    protected function getRequest(): string
    {
        return strval(count($this->nums));
    }
}
