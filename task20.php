<?php
/**
1. Сделайте класс User, в котором будут следующие свойства только для чтения: name (имя), surname (фамилия), Начальные значения этих свойств должны устанавливаться в конструкторе. Сделайте также геттеры этих свойств.
2. Сделайте так, чтобы третьим параметром в конструктор передавалась дата рождения работника в формате год-месяц-день Запишите ее в свойство birthday. Сделайте геттер для этого свойства.
3. Сделайте класс Employee, который будет наследовать от класса User. Пусть новый класс имеет свойство salary, в котором будет хранится зарплата работника. Зарплата должна передаваться четвертым параметром в конструктор объекта. Сделайте также геттер для этого свойства.
 */

class User
{
    private $name;
    private $surname;
    private $birthday;
    private $age;

    public function __construct($name, $surname,$birthday)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = $birthday;
        $this->age = $this->calculateAge();
    }
    public function getName()
    {
        return $this->name;
    }
    public function getSurname()
    {
        return $this->surname;
    }
    public function getBirthday()
    {
        return $this->birthday;
    }

    private function calculateAge()
    {
        return floor(( time() - strtotime($this->getBirthday()))/(60*60*24*365));
    }
    public function getAge()
    {
        return $this->age;
    }
}

class Employee extends User
{
    private $salary;

    public function __construct($name, $age, $birthday, $salary)
    {
        parent::__construct($name, $age, $birthday);
        $this->salary = $salary;
    }
    public function getSalary()
    {
        return $this->salary;
    }
}

$employee = new Employee('Ivan','Ivanov', '1993-04-28', 1000);
echo $employee->getAge().'<br>';
echo $employee->getSalary();
