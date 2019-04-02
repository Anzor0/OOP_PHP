<?php
/**
1. Сделайте класс Sphere, который будет реализовывать интерфейс iSphere.
 */

interface iSphere
{
    const PI = 3.14; // число ПИ как константа

    // Конструктор шара:
    public function __construct($radius);

    // Метод для нахождения объема шара:
    public function getVolume();

    // Метод для нахождения площади поверхности шара:
    public function getSquare();
}

class Sphere implements iSphere
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function getVolume()
    {
        // TODO: Implement getVolume() method.
        return 4 / 3 * self::PI * pow($this->radius, 3);
    }
    public function getSquare()
    {
        // TODO: Implement getSquare() method.
        return 4 * self::PI * $this->radius * $this->radius;
    }
}

$sphere1 = new Sphere(10);
echo $sphere1->getSquare().'<br>';
echo $sphere1->getVolume().'<br>';