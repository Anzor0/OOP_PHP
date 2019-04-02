<?php
/**
1. Сделайте интерфейс iCube, который будет описывать фигуру Куб.
Пусть ваш интерфейс описывает конструктор, параметром принимающий сторону куба, а также методы для получения объема куба и площади поверхности.
2. Сделайте класс Cube, реализующий интерфейс iCube.
3. Сделайте интерфейс iUser, который будет описывать юзера.
Предполагается, что у юзера будет имя и возраст и эти поля будут передаваться параметрами конструктора.
Пусть ваш интерфейс также задает то, что у юзера будут геттеры (но не сеттеры) для имени и возраста.
4. Сделайте класс User, реализующий интерфейс iUser.
 */

interface  iCube
{
    public function __construct($a);
    public function getSquare();
    public function getVolume();
}

class Cube implements iCube
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }
    public function getSquare()
    {
        // TODO: Implement getSquare() method.
        return 6 * $this->a * $this->a;
    }
    public function getVolume()
    {
        // TODO: Implement getVolume() method.
        return $this->a * $this->a * $this->a;
    }
}
interface iUser
{
    public function __construct($name, $age);
    public function getName();
    public function getAge();
}

class User implements iUser
{
    private $age;
    private $name;
     public function __construct($name, $age)
     {
        $this->name = $name;
        $this->age = $age;
     }
     public function getName()
     {
         // TODO: Implement getName() method.
         return $this->name;
     }
     public function getAge()
     {
         // TODO: Implement getAge() method.
         return $this->age;
     }
}

$cube1 = new Cube(10);
echo $cube1->getSquare().'<br>';
echo $cube1->getVolume().'<br>';