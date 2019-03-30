<?php
/**
1. Созадть класс Arr, который хранит в себе массив чисел и может вычислять сумму этих чисел с помощью метода getSum.
2. Добавьте в класс Arr еще один метод append, который параметром будет принимать массив чисел и добавлять эти числа в конец массива, хранящегося в объекте.
Предполагается, что методы add и append можно будет использовать в любом порядке
3.
 *
 */

class Arr
{
    private $numbers = [];

    public function __construct($numbers)
    {
        $this ->numbers = $numbers;
    }
    public function add($number)
    {
        $this->numbers[] = $number;
        return $this;
    }
    public function append($arr)
    {
        $this->numbers = array_merge($this->numbers,(array)$arr);
        return $this;
    }
    public function getSum()
    {
        return array_sum($this->numbers);
    }
}

$arr = new Arr([5,6,6]);
echo $arr->add(8)->add(5)->add(6)->append([1,2,3])->getSum();


