<?php

namespace Interfaces;

interface ITempReact
{
    public function attach(IObserve $observe);

    public function detach(IObserve $observe);

    public function notify();
}
