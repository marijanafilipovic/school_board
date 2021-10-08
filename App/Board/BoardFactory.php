<?php


namespace App\Board;

use App\Board\CSMB as CSMB;
use App\Board\CSM as CSM;

class BoardFactory
{
    public static function getBoard(string $school, array $grades){
    switch($school){
        case 'CSM':
            return new CSM($grades);
        case 'CSMB':
            return new  CSMB($grades);
        default:
            throw new \Exception('School is not valid type');
    }
    }
}