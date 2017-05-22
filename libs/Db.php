<?php
class Db {

  public $database;

  public function __construct(){
   $this->connect();
  }

  public function __destruct(){
   $this->disconnect();
  }

  private function connect(){
    $db_host = "localhost";
    $db_name = "pdo_db";
    $db_user = "root";
    $db_pass = "";
    try {
      $this->database = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
      $this->database->exec("SET CHARACTER SET
    utf8");
    }
    catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  private function disconnect(){
    $this->database = null;
  }
}
