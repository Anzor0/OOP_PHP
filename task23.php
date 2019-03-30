<?php
/**
1. Дан следующий класс Arr, в объект которого мы можем добавлять числа с помощью метода add.
Теперь добавим в наш класс метод, который будет находить сумму квадратов элементов и прибавлять к ней сумму кубов элементов.
Пусть у нас уже существует класс SumHelper, имеющий методы для нахождения сумм элементов массивов:
2. Создайте класс AvgHelper с методом getAvg, который параметром будет принимать массив и возвращать среднее арифметическое этого массива (сумма элементов делить на количество).
3. Добавьте в класс AvgHelper еще и метод getMeanSquare, который параметром будет принимать массив и возвращать среднее квадратичное этого массива (квадратный корень, извлеченный из суммы квадратов элементов, деленной на количество).
4. Добавьте в класс Arr метод getAvgMeanSum, который будет находить сумму среднего арифметического и среднего квадратичного из массива $this->nums.
 */

class Arr
{
    private $nums;
    private $sumHelper;
    private $avgHelper;

    public function add($num)
    {
        $this->nums[] = $num;
    }
    public function __construct()
    {
        $this->sumHelper = new SumHelper();
        $this->avgHelper = new AvgHelper();
    }
    public function getSum23()
    {
        return $this->sumHelper->getSum2($this->nums) + $this->sumHelper->getSum3($this->nums);
    }
    public function getAvgMeanSum()
    {
        return $this->avgHelper->getAvg($this->nums) + $this->avgHelper->getMeanSquare($this->nums);
    }
}

class SumHelper
{
    public function getSum2($arr)
    {
        return $this->getSum($arr,2);
    }
    public function getSum3($arr)
    {
        return $this->getSum($arr,3);
    }
    public function getSum($arr, $power)
    {
        $sum = 0;
        foreach($arr as $value)
        {
            $sum += pow($value, $power);
        }
        return $sum;
    }
}

class AvgHelper
{
    public function getAvg($arr)
    {
        return array_sum($arr)/count($arr);
    }
    public function getMeanSquare($arr)
    {
        $sum = 0;
        foreach($arr as $value){
            $sum += pow($value, 2);
        }
        return sqrt($sum);
    }
}

$arr = new Arr();
$arr->add(1);
$arr->add(2);
$arr->add(3);
echo $arr->getSum23().'<br>';
echo $arr->getAvgMeanSum();