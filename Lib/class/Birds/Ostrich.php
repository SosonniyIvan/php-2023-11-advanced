<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

use Lib\interface\BirdTerre;
use Lib\interface\NecessaryActions;

class Ostrich implements BirdTerre, NecessaryActions
{
    public function walk(){}
    public function go(){}
    public function run(){}

    public function eat()
    {
        // TODO: Implement eat() method.
    }

    public function sleep()
    {
        // TODO: Implement sleep() method.
    }

    public function goToilet()
    {
        // TODO: Implement goToilet() method.
    }
}