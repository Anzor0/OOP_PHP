<?php
/**
 1. Для существующего класса User, создать класс Student с методами getCourse, setCourse и addOneYear.
 */

class User
{
    private $name;
    protected $age;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
}

class Student extends User
{
    private $course;

    public function getCourse()
    {
        return $this->course;
    }
    public function setCourse($course)
    {
        $this->course=$course;
    }
    public function addOneYear()
    {
        $this->age++;
    }
}