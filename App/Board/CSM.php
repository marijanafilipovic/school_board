<?php
namespace App\Board;

use App\Board\BoardAbstract as BoardAbstract;

class CSM extends   BoardAbstract
{
public function getResult(array $grades){

    $a = array_filter($grades);

    $avg = array_sum($a)/count($a);
    //var_dump($avg);
    if($avg >= 7){
        return $avg='PASS';
    }elseif($avg < 7){

        return $avg= 'FAIL';
    }else{
       return json_encode($grades);
    }

}
}