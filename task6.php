<?php
/*
1. Сделайте класс Student со свойствами $name и $course (курс студента, от 1-го до 5-го).
2. В классе Student сделайте public метод transferToNextCourse, который будет переводить студента на следующий курс.
3. Выполните в методе transferToNextCourse проверку на то, что следующий курс не больше 5.
4. Вынесите проверку курса в отдельный private метод isCourseCorrect.
 */

class Student
{
    public function transferToNextCourse(){
        $newCourse = $this -> course + 1;
        if ($this->isCourseCorrect($newCourse)) {
            $this -> course = $newCourse;
        }
    }

    public $name;
    public $course;

    private function isCourseCorrect($course){
        return $course >=1 and $course <=5;
    }

}


$student = new Student();
$student ->course = 4;
$student ->transferToNextCourse();
echo $student ->course;
