<?php
use Board\CSM;
use Board\CSMB;
use Board\BoardFactory;
/*use Student;
use DBconnect;*/
require __DIR__.'./vendor/autoload.php';
 require 'Board/BoardFactory.php';
 require 'Board/CSM.php';
 require 'Student.php';

 function getStudent()
 {
     $id = 1;
     $student = new Student();
     $r = $student->getStudentSchool($id);
     // $grades = explode('""', $r['grades']);
$grades = json_decode($r['grades']);
    $res = $student::gradeResult($r['school'], $grades);
     var_dump($res);
 }
 $student = getStudent();

/*function getFactoryRes($school = 'CSM'){
    $grades = [4,5,7,8];
   $factory = new \Board\BoardFactory();
    $res =  $factory::getBoard($school, $grades);
    $gradesRes=  $res->getResult( $grades);
    var_dump($gradesRes);
}*/

//getFactoryRes();