<?php
/**
1. Сделайте класс Quadrate (кадрат), реализующий интерфейс Figure.
2. Сделайте класс Rectangle (прямоугольник), реализующий интерфейс Figure.
3. Сделайте класс Disk (круг), реализующий интерфейс Figure.
4. Реализовать метод getTotalSquare, находящий полную площадь фигур коллекции.
5. Добавьте в класс FiguresCollection метод getTotalPerimeter для нахождения суммарного периметра всех фигур.
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
class FiguresCollection
{
    private $figures = [];

    public function addFigure(Figure $figure)
    {
        $this->figures[] = $figure;
    }

    // Найдем полную площадь:
    public function getTotalSquare()
    {
        $sum = 0;

        foreach ($this->figures as $figure) {
            $sum += $figure->getSquare();
        }

        return $sum;
    }
    public function getTotalPerimeter()
    {
        $sum = 0;

        foreach ($this->figures as $figure) {
            $sum += $figure->getPerimeter();
        }

        return $sum;
    }
}

$disk1 = new Disk(10);
echo $disk1->getPerimeter().'<br>';
echo $disk1->getSquare().'<br>';

$collection1 = new FiguresCollection();
$collection1->addFigure(new Disk(10));
$collection1->addFigure(new Quadrate(10));
$collection1->addFigure(new Rectangle(5, 5));
echo $collection1->getTotalPerimeter();