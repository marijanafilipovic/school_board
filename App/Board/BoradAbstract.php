<?php
namespace App\Board;

abstract class BoardAbstract
{
    protected $grades= [];
    public function __construct(array $grades){
        $this->grades = $grades;
    }
    abstract public function getResult(array $grades);


}