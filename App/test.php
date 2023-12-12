<?php

require_once __DIR__ . '/../vendor/autoload.php';

use  Traits\{trait1, trait2, trait3};


class Test
{
    use trait1, trait2, trait3
    {
        trait1::test insteadof trait2, trait3;
        trait2::test as test2;
        trait3::test as test3;
    }



    public function getSum():int
    {
        return $this->test() + $this->test2() + $this->test3();
    }
}

$test  = new Test();

$t = $test->getSum();
dd($t);