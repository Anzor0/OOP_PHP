<?php
/**
1. Добавьте в наш класс Geometry метод, который будет находить объем шара по радиусу. С помощью этого метода выведите на экран объем шара с радиусом 10.
 */

class Geometry
{
    private static $pi = 3.14; // вынесем Пи в свойство

    public static function getCircleSquare($radius)
    {
        return self::$pi * $radius * $radius;
    }

    public static function getCircleСircuit($radius)
    {
        return 2 * self::$pi * $radius;
    }
    public static function getSphereVolume($radius)
    {
        return 4 / 3 *  self::$pi * pow($radius, 3);
    }
}
echo Geometry::getSphereVolume(10);