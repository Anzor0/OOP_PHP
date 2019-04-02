<?php
/**
1. Сделайте класс Quadrate (кадрат), реализующий интерфейс Figure.
2. Сделайте класс Rectangle (прямоугольник), реализующий интерфейс Figure.
3. Сделайте класс Disk (круг), реализующий интерфейс Figure.
 */

interface Figure
{
    public function getSquare();
    public function getPerimeter();
}

class Quadrate implements Figure
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getSquare()
    {
        return $this->a * $this->a;
    }
    public function getPerimeter()
    {
        return 4 * $this->a;
    }
}

class Rectangle implements Figure
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function getSquare()
    {
        // TODO: Implement getSquare() method.
        return $this->a * $this->b;
    }
    public function getPerimeter()
    {
        // TODO: Implement getPerimeter() method.
        return 2 * ($this->a + $this->b);
    }
}

class Disk implements Figure
{
    private $radius;
    const PI = 3.14;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function getSquare()
    {
        // TODO: Implement getSquare() method.
        return self::PI * $this->radius * $this->radius;
    }
    public function getPerimeter()
    {
        // TODO: Implement getPerimeter() method.
        return 2 * self::PI * $this->radius;
    }
}

$disk1 = new Disk(10);
echo $disk1->getPerimeter().'<br>';
echo $disk1->getSquare().'<br>';