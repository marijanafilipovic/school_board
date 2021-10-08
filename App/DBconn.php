<?php
namespace App;

  use PDO;

  class DBconn
  {
      private static $instance;
      private $conn;
      private $host = 'localhost';
      private $user = 'schoolBoard';
      private $pass = 'schoolBoard';
      private $name = 'schoolBoard';
    private function __construct()
    {
        $this->conn = new PDO("mysql:host={$this->host};
    dbname={$this->name}", $this->user,$this->pass,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }
    public static function getInstance()
    {
        if(!self::$instance){
          self::$instance = new DBconn();
        /*   $className = __CLASS__;
          self::$instance = new $className;*/
        }
        return self::$instance;
    }
      public function getConnection()
      {
          return $this->conn;
      }
      public function getShcool($studentID){

      }
      public function getGrades($studentID){

      }
}

/*
$instance = DBconnect::getInstance();
$conn = $instance->getConnection();
var_dump($conn);*/
