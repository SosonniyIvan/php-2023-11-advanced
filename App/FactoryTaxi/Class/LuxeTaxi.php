<?php

namespace FactoryTaxi\Class;
use FactoryTaxi\Abstract\Class\TaxiCaller;
use FactoryTaxi\Abstract\Interface\ICallTaxi;
use FactoryTaxi\Class\Callers\CallLuxeTaxi;


class LuxeTaxi extends TaxiCaller
{
    private string $delivery;

    public function __construct(string $delivery)
    {
        $this->delivery = $delivery;
    }

    public function getICallTaxi(): ICallTaxi
    {
        return new CallLuxeTaxi($this->delivery);
    }
}