<?php
/**
1. Абстрактный класс Figure с двумя абстрактными методами getSquare и getPerimeter.
2. Cоздать класс Quadrate для описания геометрической фигуры квадрат.
3. Сделайте аналогичный класс Rectangle (прямоугольник), у которого будет два приватных свойства: $a для ширины и $b для длины.
Данный класс также должен наследовать от класса Figure и реализовывать его методы.
4. Метод getRatio, который будет находить отношение площади к периметру (то есть одно делить на второе).
5. Добавьте в класс Figure метод getSquarePerimeterSum, который будет находить сумму площади и периметра.
 */

abstract class Figure
{
    abstract public function getSquare();
    abstract public function getPerimeter();
    public function getRatio()
    {
        return $this->getSquare()/$this->getPerimeter();
    }
    public function getSquarePerimeterSum()
    {
        return $this->getSquare() + $this->getPerimeter();
    }
}

class Quadrate extends Figure
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
        return $this->a * 4;
    }

}

class Rectangle extends Figure
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
        return $this->a * $this->b;
    }
    public function getPerimeter()
    {
        return ($this->a + $this->b)*2;
    }

}

$rectangle1 =  new Rectangle(5,6);
echo $rectangle1->getSquare().'<br>';
echo $rectangle1->getPerimeter().'<br>';
echo $rectangle1->getRatio().'<br>';
echo $rectangle1->getSquarePerimeterSum().'<br>';
