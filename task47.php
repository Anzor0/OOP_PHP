<?php
/**
 * Created by PhpStorm.
 * User: Anzor
 * Date: 02.04.2019
 * Time: 17:16
 */

interface iProgrammer
{
    public function __construct($name, $salary); // задаем имя и зарплату
    public function getName(); // получить имя
    public function getSalary(); // получить зарплату
    public function getLangs(); // получить массив языков, которые знает программист
    public function addLang($lang); // добавить язык в массив языков
}

class Employee
{
    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}
class Programmer extends Employee implements iProgrammer
{
    private $langs = [];
    public function addLang($lang)
    {
        $this->langs[] = $lang;
    }

    public function getLangs()
    {
        return $this->langs;
    }
}

$programmer1 = new Programmer('Ivan', 2000);
$programmer1->addLang('PHP');
$programmer1->addLang('HTML');
$programmer1->addLang('CSS');
var_dump($programmer1->getLangs());


