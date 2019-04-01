<?php
/**
1. давайте напишем реализацию абстрактного класса User. Пусть у него будет приватное свойство name, а также геттеры и сеттеры для него
2. Добавьте в ваш класс User такой же абстрактный метод increaseRevenue. Напишите реализацию этого метода в классах Employee и Student.
3. Добавьте также в ваш класс User абстрактный метод decreaseRevenue (уменьшить зарплату). Напишите реализацию этого метода в классах Employee и Student.
 *
 */

abstract class User
{
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    abstract public function increaseRevenue($value);
    abstract public function decreaseRevenue($value);

}
class Student extends User
{
    private $scholarship;
    public function getScholarship()
    {
        return $this->scholarship;
    }
    public function setScholarship($scholarship)
    {
        $this->scholarship = $scholarship;
    }
    public function increaseRevenue($value)
    {
        $this->scholarship = $this->scholarship + $value;
    }
    public function decreaseRevenue($value)
    {
        $this->scholarship = $this->scholarship - $value;
    }
}
class Employee extends User
{
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function increaseRevenue($value)
    {
        $this->salary = $this->salary + $value;
    }
    public function decreaseRevenue($value)
    {
        $this->salary = $this->salary - $value;
    }
}


$user1 = new Student();
$user1->setName('Ivan');
echo $user1->getName().'<br>';
$student1 = new Student();
$student1->setScholarship(500);
$student1->increaseRevenue(1000);
$student1->decreaseRevenue(300);
echo $student1->getScholarship();