<?php

namespace FactoryTaxi\Class\Callers;


use FactoryTaxi\Abstract\Interface\ICallTaxi;

class CallLuxeTaxi implements ICallTaxi
{
    private string $delivery;

    public function __construct(string $delivery)
    {
        $this->delivery = $delivery;
    }

    public function getType(): void
    {
        echo "Ми відправили до вас машину, Tesla, за заказом $this->delivery" . PHP_EOL;
    }

    public function getPrice(): void
    {
        echo "$this->delivery буде коштувати 600 грн";
    }
}