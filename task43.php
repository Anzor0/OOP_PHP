<?php
/**
1. Сделайте интерфейс iUser с методами getName, setName, getAge, setAge.
2. Сделайте интерфейс iEmployee, наследующий от интерфейса iUser и добавляющий в него методы getSalary и setSalary.
3. Сделайте класс Employee, реализующий интерфейс iEmployee.
 */

interface iUser
{
    public function getName();
    public function setName($name);
    public function getAge();
    public function setAge($age);
}

interface iEmployee extends iUser
{
    public function getSalary();
    public function setSalary($salary);
}

class Employee implements iEmployee
{
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->age = $age;
    }

    public function getName()
    {
        // TODO: Implement getName() method.
        return $this->name;
    }
    public function setName($name)
    {
        // TODO: Implement setName() method.
        $this->name = $name;
    }
    public function getSalary()
    {
        // TODO: Implement getSalary() method.
        return $this->salary;
    }
    public function setSalary($salary)
    {
        // TODO: Implement setSalary() method.
        $this->salary = $salary;
    }
    public function getAge()
    {
        // TODO: Implement getAge() method.
        return $this->age;
    }
    public function setAge($age)
    {
        // TODO: Implement setAge() method.
        $this->age = $age;
    }
}

$employee1 = new Employee('Ivan', 3000, 36);
echo $employee1->getName().'<br>';
echo $employee1->getSalary().'<br>';
echo $employee1->getAge().'<br>';

