<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

use Lib\interface\NecessaryActions;
use Lib\interface\BirdAir;

class Swallow implements NecessaryActions, BirdAir
{
    public function eat(){}

    public function sleep(){}

    public function goToilet(){}


    public function fly()
    {
        // TODO: Implement fly() method.
    }

    public function takeOff()
    {
        // TODO: Implement takeOff() method.
    }

    public function land()
    {
        // TODO: Implement land() method.
    }
}