<?php
/**
 * Created by PhpStorm.
 * User: Anzor
 * Date: 01.04.2019
 * Time: 13:36
 */
class Employee
{
    public $name; // имя
    public $salary; // зарплата

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    // Геттер имени:
    public function getName()
    {
        return $this->name;
    }

    // Геттер зарплаты:
    public function getSalary()
    {
        return $this->salary;
    }
}
class Student
{
    public $name; // имя
    public $scholarship; // стипендия

    public function __construct($name, $scholarship)
    {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }

    // Геттер имени:
    public function getName()
    {
        return $this->name;
    }

    // Геттер стипендии:
    public function getScholarship()
    {
        return $this->scholarship;
    }
}
class UsersCollection
{
    public $employees=[];
    public $students=[];

    public function add($person)
    {
        if ($person instanceof Employee){
            $this->employees[] = $person;
        }
        if ($person instanceof Student){
            $this->students[] = $person;
        }
    }

    public function getTotalSalary()
    {
       $sum = 0;
       foreach($this->employees as $value){
           $sum += $value->salary;
       }
       return $sum;
    }
    public function getTotalScholarship()
    {
        $sum = 0;
        foreach($this->students as $value){
            $sum += $value->scholarship;
        }
        return $sum;
    }
    public function getTotalPayment()
    {
        return $this->getTotalSalary() + $this->getTotalScholarship();
    }
}

$usersCollection = new UsersCollection;

$usersCollection->add(new Student('Петя', 100));
$usersCollection->add(new Student('Ваня', 200));

$usersCollection->add(new Employee('Коля', 300));
$usersCollection->add(new Employee('Вася', 400));

// Получим полную сумму стипендий:
echo $usersCollection->getTotalScholarship(); // выведет 300

// Получим полную сумму зарплат:
echo $usersCollection->getTotalSalary(); // выведет 700

// Получим полную сумму платежей:
echo $usersCollection->getTotalPayment(); // выведет 1000