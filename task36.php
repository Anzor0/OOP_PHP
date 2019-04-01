<?php
/**
1. Cделаем класс Circle (круг), с помощью которого можно будет найти площадь круга и длину окружности.
2. С помощью написанного класса Circle найдите длину окружности и площадь круга с радиусом 10.
 */

class Circle
{
    const PI =3.14;
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getSquare()
    {
        return self::PI * $this->radius * $this->radius;
    }
    public function getCircuit()
    {
        return 2 * self::PI * $this->radius;
    }
}

$circle1 = new Circle(10);
echo $circle1->getSquare().'<br>';
echo $circle1->getCircuit();