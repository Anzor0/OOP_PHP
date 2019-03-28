<?php
/*
1. Сделайте класс City (город), в котором будут следующие свойства - name (название), foundation (дата основания), population (население). Создайте объект этого класса.
2. Пусть дана переменная $props, в которой хранится массив названий свойств класса City. Переберите этот массив циклом foreach и выведите на экран значения соответствующих свойств.
 */

class City
{
    public $name;
    public $foundation;
    public $population;

    public function __construct($name, $foundation, $population)
    {
        $this ->name = $name;
        $this ->foundation = $foundation;
        $this ->population = $population;
    }
}

$city = new City("Lviv", '1385', 7000);
$props = ['name','foundation','population'];
foreach($props as $value){
    echo $city -> $value.'<br>';
}
