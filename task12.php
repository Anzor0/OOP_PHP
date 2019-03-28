<?php
/**
1. Hеализуйте такой же класс Student. Пусть у нас есть класс Student с двумя свойствами - name и course (курс студента).
Пусть имя созданного студента будет неизменяемым и доступным только для чтения, а вот для курса мы сделаем метод, который будет переводить нашего студента на следующий курс.
2. Модифицируйте метод transferToNextCourse так, чтобы при переводе на новый курс выполнялась проверка того, что новый курс не будет больше 5.
 */

class Student
{
    private $name;
    private $course;

    public function __construct($name)
    {
        $this -> name = $name;
        $this -> course = 1;
    }
    public function getName()
    {
        return $this ->name;
    }
    public function getCourse()
    {
        return $this->course;
    }
    public function setCourse($course)
    {
        $this -> course = $course;
    }
    public function transferToNextCourse()
    {
        $newCourse = $this->course + 1;
        if ($newCourse<6) {
            $this->course ++;
        }
    }

}

$student1 = new Student('Ivan');
$student1 ->transferToNextCourse();
echo $student1 ->getCourse()."<br>";

$student2 = new Student('Fedor');
$student2->setCourse(3);
$student2->transferToNextCourse();
echo $student2 ->getCourse();