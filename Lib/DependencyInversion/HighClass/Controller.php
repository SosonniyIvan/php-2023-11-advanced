<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

use abstract\IMysql;

class Controller implements IMysql
{

    public function __construct(protected IMysql $mysql)
    {
    }
    function getData()
    {
        $this->mysql->getData();
    }
}