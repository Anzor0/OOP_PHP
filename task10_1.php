<?php
/**
1. Сделайте класс Employee, в котором будут следующие свойства: name (имя), surname (фамилия), patronymic (отчество) и salary (зарплата).
Пусть этот класс хранится в отдельном файле.
2. Подключите к файлу index.php класс Employee, создайте два объекта этого класса с произвольными данными, выведите на экран сумму их зарплат.
 */

class Employee
{
    public $name;
    public $surname;
    public $patronymic;
    public $salary;

    public function __construct($name, $surname, $patronymic, $salary)
    {
        $this -> name = $name;
        $this -> surname = $surname;
        $this -> patronymic = $patronymic;
        $this -> salary = $salary;
    }
}