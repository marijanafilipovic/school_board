<?php
namespace App;

require __DIR__ . '/../vendor/autoload.php';

 if(isset($_REQUEST['student'])){
     $student = getStudent();
 }
 function getStudent()
 {
     $id = $_GET['student'];
    // var_dump($id);
    //$studentID = substr($id, strpos($id, "=") +1 );
      //   var_dump($studentID);
     $student = new Student();
     $r = $student->getStudentSchool($id);
    //var_dump($r['school']);
     // $grades = explode('""', $r['grades']);
    $grades = json_decode($r['grades']);
   return $res = $student::gradeResult($r['school'], $grades);
      //var_dump($res);
 }

//getFactoryRes();