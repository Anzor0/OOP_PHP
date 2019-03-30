<?php
/*
1. Создать класс User. Приватные свойства name и age. Публичные set и get.
2. Создать класс Employee, который является наследником User. Добавьте классу Employee свойство salary(геттер и сеттер)
3. Создать класс Student, который является наследником User. Добавьте Student свойство course(геттер и сеттер).
4. Сделайте класс Programmer, который будет наследовать от класса Employee. Пусть новый класс имеет свойство langs, в котором будет хранится массив языков, которыми владеет программист. Сделайте также геттер и сеттер для этого свойства.
5. Сделайте класс Driver (водитель), который будет наследовать от класса Employee. Пусть новый класс добавляет следующие свойства: водительский стаж, категория вождения (A, B, C, D), а также геттеры и сеттеры к ним.
*/
class User
{
    private $name;
    private $age;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getAge()
    {
        return $this->age;
    }
}
class Employee extends User
{
    private $salary;

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function getSalary()
    {
        return $this->salary;
    }
}

class Student extends User
{
    private $course;

    public function setCourse($course)
    {
        $this->course = $course;
    }
    public function getCourse()
    {
        return $this->course;
    }
}
class Programmer extends Employee
{
    private $langs = [];
    public function setLangs($langs)
    {
        $this->langs = $langs;
    }
    public function getLangs()
    {
        return $this->langs;
    }
}
class Driver extends Employee
{
    private $drivingExperience;
    public function setDrivingExperience($drivingExperience)
    {
        $this->drivingExperience = $drivingExperience;
    }
    public function getDrivingExperience()
    {
        return $this->drivingExperience;
    }
}