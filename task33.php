<?php
/**
1. Сделайте класс Num, у которого будут два приватны статических свойства: num1 и num2. Пусть по умолчанию в свойстве num1 хранится число 2, а в свойстве num2 - число 3.
2. Сделайте в классе Num метод getSum, который будет выводить на экран сумму значений свойств num1 и num2.
 *
 */

class Num
{
    private static $num1 = 2;
    private static $num2 = 3;

    public static function getSum()
    {
        return self::$num1 + self::$num2;
    }
}

echo Num::getSum();