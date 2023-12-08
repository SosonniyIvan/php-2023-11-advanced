<?php

namespace Lib;

use Exception;



class User
{
    private string $name;
    private int $age;

    private string $email;

    public function __construct(string $name, int $age, string $email)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->email = $email;
    }

    public function __call($args, $methods)
    {
            if (!method_exists($this, $methods))
            {
                echo "Цей метод '{$methods}' не існує /n";
            }
            call_user_func([$this, $methods], $args);
    }

    public function getAll(): void
    {
       echo $this->name . PHP_EOL. $this->age . PHP_EOL . $this->email;
    }


    private  function setName(string $name): void
    {
        $this->name = $name;
    }

    private function setAge(int $age): void
    {
        $this->age = $age;
    }
}

$user = new User('Денис', 27, 'gmail.com');

try{
    $user->getAll();
}catch(Exception $e)
{
    dd($e);
}