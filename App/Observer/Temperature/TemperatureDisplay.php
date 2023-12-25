<?php

namespace Temperature;

use Interfaces\IObserve;
use Interfaces\ITempReact;

class TemperatureDisplay implements IObserve
{
    private $filename;

    /**
     * @throws \Exception
     */
    public function __construct($filename)
    {
        $this->filename = $filename;
        if(!isset($this->filename))
        {
            throw new \Exception('Не можемо знайти даний шлях. Перевірте його написання!');
        }
    }

    public function update(ITempReact $react)
    {
        $info = json_encode($react) . PHP_EOL;
        file_put_contents($this->filename, $info, FILE_APPEND);
        echo 'Дисплей: Все записано';

    }
}