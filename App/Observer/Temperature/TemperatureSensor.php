<?php

namespace Temperature;

use Interfaces\IObserve;
use Interfaces\ITempReact;

class TemperatureSensor implements ITempReact
{

    public $temp;
    private  $observers;
    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function attach(IObserve $observe)
    {
        echo 'Бот: Користувач підключився до додатка' . PHP_EOL;
        $this->observers->attach($observe);
    }

    public function detach(IObserve $observe)
    {
        echo 'Бот: Користувач відключився від додатка';
    }

    public function notify()
    {
        echo 'Бот: Сповіщюємо про зміни...';
        foreach ($this->observers as $observer)
        {
            $observer->update($this);
        }
    }

    public function changeTemp()
    {
        echo PHP_EOL . 'Бот: Виміряємо температуру середовища...' . PHP_EOL;
        $this->temp = rand(-20, 45);
        echo "Бот: Маємо таку температуру {$this->temp}";
        $this->notify();
    }
}
