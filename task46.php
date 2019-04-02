<?php
/**
1. Пусть интерфейс Tetragon описывает геттеры для всех четырех сторон четырехугольника.
2. Пусть также у нас есть интерфейс Figure, который мы уже делали ранее.
3. Сделать класс Quadrate, который реализовывал два интерфейса: и Figure, и Tetragon.
4. Сделайте так, чтобы класс Rectangle также реализовывал два интерфейса: и Figure, и Tetragon.
5. Сделайте интерфейс Circle (круг) с методами getRadius (получить радиус) и getDiameter (получить диаметр).
6. Сделайте так, чтобы класс Disk также реализовывал два интерфейса: и Figure, и Circle.
 */

interface Tetragon
{
    public function getA();
    public function getB();
    public function getC();
    public function getD();
}
interface Figure
{
    public function getSquare();
    public function getPerimeter();
}
class Quadrate implements Figure, Tetragon
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->a;
    }

    public function getC()
    {
        return $this->a;
    }

    public function getD()
    {
        return $this->a;
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
class Rectangle implements Figure, Tetragon
{
    private $a;
    private $b;
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function getA()
    {
        // TODO: Implement getA() method.
        return $this->a;
    }
    public function getB()
    {
        // TODO: Implement getA() method.
        return $this->b;
    }
    public function getC()
    {
        // TODO: Implement getA() method.
        return $this->a;
    }
    public function getD()
    {
        // TODO: Implement getA() method.
        return $this->b;
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

interface Circle
{
    public function getRadius();
    public function getDiametr();
}

class Disk implements Circle, Figure
{
    const PI = 3.14;
    private $radius;

    public function getRadius()
    {
        // TODO: Implement getRadius() method.
        return $this->radius;
    }
    public function getDiametr()
    {
        // TODO: Implement getDiametr() method.
        return 2 * $this->radius;
    }
    public function getPerimeter()
    {
        // TODO: Implement getPerimeter() method.
        return 2 * self::PI * $this->radius;
    }
    public function getSquare()
    {
        // TODO: Implement getSquare() method.
        return self::PI * pow($this->radius, 2);
    }
}

