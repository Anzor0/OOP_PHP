<?php
/**
1. Сделайте класс User с публичным свойствами name (имя) и surname (фамилия).
2. Сделайте класс Employee, который будет наследовать от класса User и добавлять salary (зарплата).
3. Сделайте класс City с публичными свойствами name (название города) и population (количество населения).
4. Создайте 3 объекта класса User, 3 объекта класса Employee, 3 объекта класса City, и в произвольном порядке запишите их в массив $arr.
5. Переберите циклом массив $arr и выведите на экран столбец свойств name тех объектов, которые принадлежат классу User или потомку этого класса.
6. Переберите циклом массив $arr и выведите на экран столбец свойств name тех объектов, которые НЕ принадлежат классу User или потомку этого класса.
7. Переберите циклом массив $arr и выведите на экран столбец свойств name тех объектов, которые принадлежат именно классу User, то есть не классу City и не классу Employee.
8. Переберите циклом массив $arr и выведите на экран столбец свойств name тех объектов, которые принадлежат именно классу User, то есть не классу City и не классу Employee.
 *
 */

class User
{
    public $name;
    public $surname;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }
}

class Employee extends User
{
   public $salary;

   public function __construct($name, $surname,$salary)
   {
       parent::__construct($name, $surname);
       $this->salary = $salary;
   }
}

class City
{
    public $name;
    public $population;
    public function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }
}

$arr[] = new User('Ivan', 'Ivanov');
$arr[] = new User('Petr', 'Petrov');
$arr[] = new User('Taras', 'Tarasov');
$arr[] = new Employee('Ivan', 'Ivanov', 2000);
$arr[] = new Employee('Kolya', 'Nikolaev', 3000);
$arr[] = new Employee('David', 'Davidv', 4000);
$arr[] = new City('Lviv', 50000);
$arr[] = new City('Kiev', 100000);
$arr[] = new City('Chop', 20000);

echo 'Класс User и потомки:'.'<br>';
foreach ($arr as $value)
{
    if ( $value instanceof User)
    {
        echo $value->name.'<br>';
    }
}
echo 'НЕ принадлежат классу User или потомку этого класса:'.'<br>';
foreach ($arr as $value)
{
    if ( !($value instanceof User))
    {
        echo $value->name.'<br>';
    }
}

echo 'Принадлежат именно классу User, то есть не классу City и не классу Employee:'.'<br>';
foreach ($arr as $value)
{
    if ( ($value instanceof User) and !($value instanceof Employee))
    {
        echo $value->name.'<br>';
    }
}