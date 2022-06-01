<?php

class Banco {

  private $db;
  function __construct() {
    try {
        $this->db = new PDO('sqlite:'.__DIR__.'/database.sqlite');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
      echo $ex->getMessage();
    }
    
  }

 function exec($sql) {
   try {
         return $this->db->exec($sql);
     } catch (PDOException $ex) {
      echo $ex->getMessage();
    }
 }

  function query($sql) {
    try {
         return $this->db->query($sql);
     } catch (PDOException $ex) {
      echo $ex->getMessage();
    }
 }
  
}

?>