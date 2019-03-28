<?php
/*
1. Сделайте класс Employee, в котором будут следующие публичные свойства - name (имя), age (возраст), salary (зарплата). Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта.
2. Создайте объект класса Employee с именем 'Вася', возрастом 25, зарплатой 1000.
3. Создайте объект класса Employee с именем 'Петя', возрастом 30, зарплатой 2000.
4. Выведите на экран сумму зарплат Васи и Пети.

*/

class Employee
{
    public $name;
    public $age;
    public $salary;

    public function __construct($name, $age, $salary)
    {
        $this -> name = $name;
        $this -> age = $age;
        $this -> salary = $salary;
    }
}

$employee1 = new Employee('Вася',25,1000);
$employee2 = new Employee('Петя',30,2000);

echo $employee1 ->salary + $employee2 ->salary;