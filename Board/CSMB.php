<?php
namespace Board;
use Board\BoardAbstract;

class CSMB extends BoardAbstract
{
public function getResult(array $grades)
{

    $a = array_filter($grades);

    $avg = array_sum($a)/count($a);
    //var_dump($avg);
    if(count($a) > 2 )
    {
        if(max($a) > 8 ){
            return $avg='PASS';
        }else{
            return 'FAIL';
        }
    }else{
        //var_dump($avg);
        if($avg >= 7){
            return $avg='PASS';
        }elseif($avg <= 7){

            return $avg= 'FAIL';
        }else{
            json_encode($grades);
        }
    }


}
}