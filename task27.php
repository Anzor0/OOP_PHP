<?php
/**
1. Сделайте класс Employee с публичными свойствами name (имя) и salary (зарплата).
2. Сделайте класс Student с публичными свойствами name (имя) и scholarship (стипендия).
3. Создайте по 3 объекта каждого класса и в произвольном порядке запишите их в массив $arr.
4. Переберите циклом массив $arr и выведите на экран столбец имен всех работников.
5. Аналогичным образом выведите на экран столбец имен всех студентов.
6. Переберите циклом массив $arr и с его помощью найдите сумму зарплат работников и сумму стипендий студентов. После цикла выведите эти два числа на экран.
 */

class Employee
{
    public $name;
    public $salary;
    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }
}
class Student
{
    public $name;
    public $scholarship;
    public function __construct($name, $scholarship)
    {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }
}

$arr[] = new Employee('Ivan', 2000);
$arr[] = new Employee('Kolya', 3000);
$arr[] = new Employee('Petya', 4000);
$arr[] = new Student('Ivan', 500);
$arr[] = new Student('John', 400);
$arr[] = new Student('Stepan', 600);

$sumSalary = 0;
$sumScholarship = 0;



foreach($arr as $key => $elem)
{
    if ($elem instanceof Employee)
    {
        $sumSalary += $elem->salary;
    }
}

foreach($arr as $key => $elem)
{
    if ($elem instanceof Student)
    {
        $sumScholarship += $elem->scholarship;
    }
}

echo 'Employee: '.$sumSalary.'<br>';
echo 'Student: '.$sumScholarship.'<br>';

echo 'Employee: '.'<br>';
foreach($arr as $key => $elem)
{
    if ($elem instanceof Employee)
    {
        echo $elem->name.'<br>';
    }
}
echo 'Student: '.'<br>';
foreach($arr as $key => $elem)
{
    if ($elem instanceof Student)
    {
        echo $elem->name.'<br>';
    }
}