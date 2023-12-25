<?php

require_once __DIR__  . '/../../vendor/autoload.php';

use Temperature\TemperatureDisplay;
use Temperature\TemperatureSensor;

try
{
    $sensor = new TemperatureSensor();
    $display = new TemperatureDisplay(__DIR__ . '/Display.txt');
    $sensor->attach($display);

}catch(Exception $e)
{
    echo $e->getMessage() . '404';
}


