<?php
namespace App;
require 'DBconn.php';
use App\Board\BoardFactory as BoardFactory;

class Student
{
public $id;
public $name;
public $school;
public $grades;

    public function __construct( ){
       /* $instance = \DBconnect::getInstance();
        $conn = $instance->getConnection();
        // $query = "SELECT school FROM students WHERE student_id = '$id'";
        $query = $conn->prepare('SELECT * FROM students WHERE student_id = ?');
        $query->execute([$id]);
        $student = $query->fetch();
        $id = $student['student_id'];
        $school = $student['school'];
        $grades = $student['grades'];*/
    }
    public function getStudentSchool($id){

        $instance =   DBconn::getInstance();
        $conn = $instance->getConnection();
    // $query = "SELECT school FROM students WHERE student_id = '$id'";
       $q = $conn->prepare("SELECT * FROM students WHERE student_id = :value");
         $q->bindParam(':value', $id);
          $q->execute();
        return $q->fetch();/*
        $query = $conn->prepare('SELECT * FROM students WHERE student_id = ?');
        $query->bindParam("i",$id);
        $query->execute();
         $student = $query->fetch();*/
       // var_dump($s);

       // return $student['school'];
    }
   public static function gradeResult($school, $grades){
       //  $grades = [4,5,7,8];

        $factory = new BoardFactory();
        $res =  $factory::getBoard($school, $grades);
       //var_dump($res);
       $gradesRes=  $res->getResult( $grades);
         var_dump($gradesRes);
    }
}