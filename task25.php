<?php
/*
Сделайте функцию compare, которая параметром будет принимать два объекта и сравнивать их.
Функция должна возвращать 1, если переданные переменные ссылаются на один и тот же объект.
Функция должна возвращать 0, если объекты разные, но одного и того же класса и с теми же свойствами и их значениями.
Функция должна возвращать -1 в противном случае.
*/
class User
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
    public function compare($compare1, $compare2)
    {
        return $compare1 == $compare2;
    }
}
$user1 = new User('Коля', 30);
$user3 = $user1;
$user2 = new User('Коля', 30);
$user4 = new User('Вася', 30);

function compare($obj1, $obj2)
{
    if ($obj1 === $obj2){
        return 1;
    }
    elseif ($obj1 == $obj2){
        return 0;
    }
    else return -1;
}
echo compare($user1, $user4);