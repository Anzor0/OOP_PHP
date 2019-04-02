<?php
/**
1. Сделайте класс User, который будет реализовывать данный интерфейс.
 */
interface iUser
{
    public function setName($name); // установить имя
    public function getName(); // получить имя
    public function setAge($age); // установить возраст
    public function getAge(); // получить возраст
}

class User implements iUser
{
    private $name;
    private $age;
    public function setName($name)
    {
        // TODO: Implement setName() method.
        $this->name = $name;
    }
    public function getName()
    {
        // TODO: Implement getName() method.
        return $this->name;
    }
    public function setAge($age)
    {
        // TODO: Implement setAge() method.
        $this->age = $age;
    }
    public function getAge()
    {
        // TODO: Implement getAge() method.
        return $this->age;
    }
}