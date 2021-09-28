<?php
use Board\CSM;
use Board\CSMB;
use Board\BoardFactory;
/*use Student;
use DBconnect;*/
require __DIR__.'./vendor/autoload.php';
 require 'Board/BoardFactory.php';
 require 'Board/CSM.php';
 require 'Board/CSMB.php';
 require 'Student.php';

 if(isset($_REQUEST['student'])){
     $student = getStudent();
 }
 function getStudent()
 {
     $id = $_GET['student'];
    $studentID = substr($id, strpos($id, "=") +1 );
        // var_dump($studentID);
     $student = new Student();
     $r = $student->getStudentSchool($studentID);
     // $grades = explode('""', $r['grades']);
    $grades = json_decode($r['grades']);
    $res = $student::gradeResult($r['school'], $grades);
     //var_dump($res);
 }

//getFactoryRes();