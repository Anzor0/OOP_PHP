<?php
/*
  1. Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), salary (зарплата). Сделайте метод doubleSalary, который текущую зарплату будет увеличивать в 2 раза.
  2. Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), salary (зарплата). Сделайте метод doubleSalary, который текущую зарплату будет увеличивать в 2 раза.
 */

class Employee
{
    public $name;
    public $salary;

    public function doubleSalary(){
        $this -> salary = 2 * $this -> salary;
    }
}

$employee = new Employee();
$employee -> salary = 1000;
echo $employee -> salary.'<br>';
$employee ->doubleSalary();
echo $employee -> salary.'<br>';
$employee ->doubleSalary();
echo $employee -> salary;