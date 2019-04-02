<?php
/**
1. Реализуйте класс Country (страна) со свойствами name (название), age (возраст), population (количество населения) и геттерами для них. Пусть наш класс для сокращения своего кода использует уже созданный нами трейт Helper.
 */

trait Helper
{
    private $name;
    private $age;
    private $population;
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getPopulation()
    {
        return $this->population;
    }
}
class Country
{
    use Helper;
    public function __construct($name, $age, $population)
    {
        $this->name = $name;
        $this->age = $age;
        $this->population = $population;
    }
}

$country1 = new Country("France", 2000, 43000000);
echo $country1->getPopulation();