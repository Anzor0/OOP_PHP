<?php
/**
 * Created by PhpStorm.
 * User: Anzor
 * Date: 01.04.2019
 * Time: 20:01
 */
class User
{
    public $name;
    private static $count = 0;

    public function __construct($name)
    {
        $this->name = $name;

        self::$count++;
    }
    public function getCount()
    {
        return self::$count;
    }
}

$user1 = new User('John');
echo User::getCount();

$user2 = new User('Tom');
echo User::getCount();