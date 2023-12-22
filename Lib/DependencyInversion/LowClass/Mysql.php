<?php
require_once __DIR__ . '/../../../vendor/autoload.php';
use abstract\IMysql;

class Mysql implements IMysql
{
    public function getData()
    {
        return 'some data from database';
    }
}