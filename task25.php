<?php

class User
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
    public function compare($compare1, $compare2)
    {
        return $compare1 == $compare2;
    }
}
$user1 = new User('Коля', 30);
$user2 = new User('Коля', 30);


