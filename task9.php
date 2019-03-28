<?php
/*
1. Сделайте класс Employee, в котором будут следующие свойства: name (имя), surname (фамилия) и salary (зарплата).
2. Сделайте так, чтобы свойства name и surname были доступны только для чтения, а свойство salary - и для чтения, и для записи.
 */

class Employee
{
    private $name;
    private $surname;
    private $salary;

    public function __construct($name, $surname, $salary)
    {
        $this -> name = $name;
        $this -> surname = $surname;
        $this -> salary = $salary;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getSurname()
    {
        return $this->surname;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function getSalary()
    {
        return $this->salary;
    }

}

$employee = new Employee('Иван', 'Иванов','2000');
echo $employee -> getName();
echo $employee -> getSurname();
echo $employee -> getSalary();
echo $employee -> getSalary($employee ->setSalary(3000));
