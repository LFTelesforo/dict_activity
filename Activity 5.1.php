<?php
class connectionConfig{
        public $servername = "localhost";
        public $username ="root";
        public $password ="";
        public $dbname ="dbstudent";
}
class Student{
    public $name;
    public $age;
    public $course;

    public function __construct($name, $age, $course) {
        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
    }
    public function Insert(){
        $connectionConfig = new connectionConfig();
        $conn = new mysqli($connectionConfig->servername,$connectionConfig->username,$connectionConfig->password,$connectionConfig->dbname);
        $sql ="INSERT INTO studentinfo(name, age, course) 
        VALUES ('".$this->name ."',".$this->age.",'".$this->course."')";

        if($conn->query($sql)===TRUE){
            return "new record has succesfully created";
        }
        else{
            return "error: ".$sql."<br>".$conn->error;
        }
    }
    public function UpdateList(){
        $connectionConfig = new connectionConfig();
        $conn = new mysqli($connectionConfig->servername,$connectionConfig->username,$connectionConfig->password,$connectionConfig->dbname);
    }
    public function getList(){
        $connectionConfig = new connectionConfig;
        $conn = new mysqli($connectionConfig->servername,$connectionConfig->username,$connectionConfig->password,$connectionConfig->dbname);
        $sql = "SELECT * FROM studentinfo";
        $result = $conn->query($sql);
        return $result;
    }
}
    $encodedName = $_POST['txtname'];
    $encodedAge = $_POST['txtage'];
    $encodedCourse = $_POST['txtcourse'];
    $students =new student($encodedName, $encodedAge, $encodedCourse,);
    $DBCallReturn = $students->Insert();
    $DBGetListReturn =$students->getList();
    $student [] = $students;
    require 'Activity 5.view.php';
?>