<?php

class Student {
    public $Name;
    public $Age;
    public $Course;

    public function __construct($paramName, $paramAge, $paramCourse) {
        $this->Name = $paramName;
        $this->Age = $paramAge;
        $this->Course = $paramCourse;
    }

    public function message() {
        return $this->Name . " is " . $this->Age . " years old taking " . $this->Course . ".";
    }
}

$student0 = new Student("Leanne", 20, "BSIT-BA");
$student1 = new Student("Jazzmin", 19, "BSIT-BA");
$student2 = new Student("Jenny", 20, "BSIT-SM");
$student3 = new Student("Ryan", 20, "BSIT-SM");

$students = array();
$students[] = $student0;
$students[] = $student1;
$students[] = $student2;
$students[] = $student3;

require 'Activity 5.view.php';
?>