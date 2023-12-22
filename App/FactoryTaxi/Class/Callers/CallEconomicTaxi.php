<?php

namespace FactoryTaxi\Class\Callers;



use FactoryTaxi\Abstract\Interface\ICallTaxi;

class CallEconomicTaxi implements ICallTaxi
{
    private string $delivery;

    public function __construct(string $delivery)
    {
        $this->delivery = $delivery;

    }

    public function getType(): void
    {
        echo "Ми відправили до вас машину, Skoda, за заказом $this->delivery" . PHP_EOL;
    }

    public function getPrice(): void
    {
        echo "$this->delivery буде коштувати 120 грн";
    }
}