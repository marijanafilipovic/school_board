<?php
require 'DBconn.php';
use DBconnect;
class Student
{
public $id;
public $name;
public $school;
public $grades;

    public function __construct(){

    }
    public function getStudentSchool($id){
        $instance = DBconnect::getInstance();
        $conn = $instance->getConnection();
    // $query = "SELECT school FROM students WHERE student_id = '$id'";
        $query = $conn->prepare('SELECT * FROM students WHERE student_id = ?');
        $query->execute( [$id]);
        return  $query->fetch();
            //var_dump($school);
    }
   public static function gradeResult($school, $grades){
       //  $grades = [4,5,7,8];
        $factory = new \Board\BoardFactory();
        $res =  $factory::getBoard($school, $grades);
        $gradesRes=  $res->getResult( $grades);
        var_dump($gradesRes);
    }
}