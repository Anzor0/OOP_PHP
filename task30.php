<?php
/**
1. Сделайте класс Post (должность), в котором будут следующие свойства, доступные только для чтения: name (название должности) и salary (зарплата на этой должности).
2. Создайте несколько объектов класса Post: программист, менеджер водитель.
3. Сделайте класс Employee (работник), в котором будут следующие свойства: name (имя) и surname (фамилия). Пусть начальные значения этих свойств будут передаваться параметром в конструктор.
4. Сделайте геттеры и сеттеры для свойств name и surname.
5. Пусть теперь третьим параметром конструктора будет передаваться должность работника, представляющая собой объект класса Post. Укажите тип этого параметра в явном виде.
6. Сделайте так, чтобы должность работника (то есть переданный объект с должностью) записывалась в свойство post.
7. Создайте объект класса Employee с должностью программист. При его создании используйте один из объектов класса Post, созданный нами ранее.
8. Выведите на экран имя, фамилию, должность и зарплату созданного работника.
9. Реализуйте в классе Employee метод changePost, который будет изменять должность работника на другую. Метод должен принимать параметром объект класса Post. Укажите в методе тип принимаемого параметра в явном виде.
 */

class Post
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

class Employee
{
    private $name;
    private $surname;
    public $post;

    public function __construct($name, $surname, Post $post)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->post = $post;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }
    public function getSurname()
    {
        return $this->surname;
    }
    public function changePost(Post $post)
    {
        $this->post = $post;
    }
}

$post1 = new Post('Программист', 2000);
$post2 = new Post('Менеджер', 1000);
$post3 = new Post('Водитель', 800);

$employee1 = new Employee('Вася', 'Simonov', $post1);
$employee2 = new Employee('Коля', 'Петров', $post2);
$employee3 = new Employee('Федя', 'Васечкин', $post3);

echo $employee1->getName().'<br>';
echo $employee1->getSurname().'<br>';
echo $employee1->post->getName().'<br>';
echo $employee1->post->getSalary().'<br>';

$employee1->changePost($post2);
echo $employee1->getName().'<br>';
echo $employee1->getSurname().'<br>';
echo $employee1->post->getName().'<br>';
echo $employee1->post->getSalary().'<br>';

//var_dump($employee1);