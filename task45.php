<?php
/**
1. Сделайте интерфейс Figure3d (трехмерная фигура), который будет иметь метод getVolume (получить объем) и метод getSurfaceSquare (получить площадь поверхности).
2. Сделайте класс Cube (куб), который будет реализовывать интерфейс Figure3d.
3. Создайте несколько объектов класса Quadrate, несколько объектов класса Rectangle и несколько объектов класса Cube. Запишите их в массив $arr в случайном порядке.
4. Переберите циклом массив $arr и выведите на экран только площади объектов реализующих интерфейс Figure.
5. Переберите циклом массив $arr и выведите для плоских фигур их площади, а для объемных - площади их поверхности.
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
interface Figure3d
{
    public function getVolume();
    public function getSurfaceSquare();
}

class Cube implements Figure3d
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getVolume()
    {
        // TODO: Implement getVolume() method.
        return pow($this->a, 3);
    }
    public function getSurfaceSquare()
    {
        // TODO: Implement getSurfaceSquare() method.
        return 6 * $this->a * $this->a;
    }
}

$arr[] = new Quadrate(5);
$arr[] = new Quadrate(2);
$arr[] = new Quadrate(3);
$arr[] = new Rectangle(5, 5);
$arr[] = new Rectangle(3, 4);
$arr[] = new Rectangle(2, 8);
$arr[] = new Cube(5);
$arr[] = new Cube(2);
$arr[] = new Cube(10);

echo 'Площадь 3D фигур:<br>';
foreach($arr as $value)
{
    if ($value instanceof Figure3d)
    {
        echo $value->getSurfaceSquare().'<br>';
    }
}

echo 'Площадь 2D фигур:<br>';
foreach($arr as $value)
{
    if($value instanceof Figure)
    {
        echo $value->getSquare().'<br>';
    }
}
echo 'Площадь 2D фигур и площадь 3D фигру:<br>';
foreach($arr as $value)
{
    if($value instanceof Figure)
    {
        echo $value->getSquare().'<br>';
    }
    if ($value instanceof Figure3d)
    {
        echo $value->getSurfaceSquare().'<br>';
    }

}

