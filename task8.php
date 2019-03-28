<?php
/*
1. Сделайте класс Employee, в котором будут следующие private свойства: name (имя), age (возраст) и salary (зарплата).
2. Сделайте геттеры и сеттеры для всех свойств класса Employee.
3. Дополните класс Employee приватным методом isAgeCorrect, который будет проверять возраст на корректность (от 1 до 100 лет). Этот метод должен использоваться в сеттере setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).
4. Пусть зарплата наших работников хранится в долларах. Сделайте так, чтобы геттер getSalary добавлял в конец числа с зарплатой значок доллара.
*/

class Employee
{
    private $name;
    private $age;
    private $salary;

    public function setName($name){
    $this ->name = $name;
}
    public function getName(){
        return $this->name;
    }
    public function setAge($age){
        if ($this -> isAgeCorrect($age))
        $this ->age = $age;
    }
    public function getAge(){
        return $this->age;
    }
    public function setSalary($salary){
        $this ->salary = $salary;
    }
    public function getSalary(){
        return $this->salary.' $';
    }

    private function isAgeCorrect($age){
        return $age>0 and $age<101;
    }
}

$employee1 = new Employee();
$employee1 ->setAge(126);
echo $employee1 ->getAge();

$employee2 = new Employee();
$employee2 ->setAge(31);
echo $employee2 ->getAge();

$employee2->setSalary(5000);
echo $employee2 ->getSalary();