<?php
/*
 1. Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата).
 2. Сделайте в классе Employee метод getName, который будет возвращать имя работника.
 3. Сделайте в классе Employee метод getAge, который будет возвращать возраст работника.
 4. Сделайте в классе Employee метод getSalary, который будет возвращать зарплату работника.
 5. Сделайте в классе Employee метод checkAge, который будет проверять то, что работнику больше 18 лет и возвращать true, если это так, и false, если это не так.
 6. Создайте два объекта класса Employee, запишите в их свойства какие-либо значения. С помощью метода getSalary найдите сумму зарплат созданных работников.
*/

class Employee
{
    public $name;
    public $age;
    public $salary;

    public function getName(){
        return $this -> name;
    }

    public function getAge(){
        return $this -> age;
    }

    public function getSalary(){
        return $this -> salary;
    }

    public function checkAge(){
        if ($this -> age < 18)
            return false;
        else return true;
    }
}

$employee1 = new Employee();
$employee1 -> name = 'Иван';
$employee1 -> age = 18;
$employee1 -> salary = 1000;

$employee2 = new Employee();
$employee2 -> name = 'Вася';
$employee2 -> age = 26;
$employee2 -> salary = 2000;

var_dump($employee1 ->checkAge());