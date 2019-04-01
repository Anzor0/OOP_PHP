<?php
/**
1. Реализовать метод, чтобы работник, который уже есть в нашем наборе, не добавлялся еще раз.
2. Вместо метода exists использовать in_array.
 */

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
    class EmployeesCollection
    {
        private $employees = []; // массив работников

        // Добавляем нового работника:
        public function add($newEmployee)
        {
            if (!in_array($newEmployee, $this->employees, false)) {
                $this->employees[] = $newEmployee;
            }
        }

        // Получаем всех работников в виде массива:
        public function get()
        {
            return $this->employees;
        }

        private function exists($newEmployee)
        {
            foreach ($this->employees as $employee) {
                if ($employee == $newEmployee) { // сравниваем через ==
                    return true;
                }
            }
            return false;
        }
    }

$employeesCollection = new EmployeesCollection;

$employeesCollection->add(new Employee('Коля', 100));
$employeesCollection->add(new Employee('Коля', 100)); // второго такого же не добавит

var_dump($employeesCollection->get());