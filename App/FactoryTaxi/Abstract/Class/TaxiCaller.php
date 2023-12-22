<?php

namespace FactoryTaxi\Abstract\Class;


use FactoryTaxi\Abstract\Interface\ICallTaxi;

abstract class TaxiCaller
{
    abstract public function getICallTaxi():ICallTaxi;

    public function call($call):void
    {
        $taxi = $this->getICallTaxi();
        $taxi->getType();
        $taxi->getPrice();
    }
}