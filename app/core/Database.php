<?php
class Database {
 private $host = DB_CONFIG["HOST"];
 private $user = DB_CONFIG["USER"];
 private $pass = DB_CONFIG["PASS"];
 private $dbname = DB_CONFIG["DBNAME"];

 private PDO|null $pdo;

 protected function connect() {
  $this->pdo = null;

  try {
   $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=UTF8;";
   $this->pdo = new PDO($dsn, $this->user, $this->pass);
   $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
   
  } catch(PDOException $error) {
   echo "Connection error: {$error->getMessage()}";
  }

  return $this->pdo;
 }

 public function __destruct() {
  $this->pdo = null;
 }

}