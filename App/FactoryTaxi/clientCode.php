<?php

require_once __DIR__ . '/../../vendor/autoload.php';


use FactoryTaxi\Abstract\Class\TaxiCaller;
use FactoryTaxi\Class\EconomicTaxi;
use FactoryTaxi\Class\LuxeTaxi;
use FactoryTaxi\Class\StandartTaxi;






function delivery(TaxiCaller $caller): void
{
    $caller->call('Hello');

}

delivery(new EconomicTaxi('Дитина'));
delivery(new StandartTaxi('Дитина'));
delivery(new LuxeTaxi('Дитина'));