<?php


namespace Board;
use Board\BoardAbstract;
use Board\CSM;
use Board\CSMB;
class BoardFactory
{
    public static function getBoard(string $school, array $grades){
    switch($school){
        case 'CSM':
            return new \Board\CSM($grades);
        case 'CSMB':
            return new \Board\CSMB($grades);
        default:
            throw new \Exception('School is not valid type');
    }
    }
}