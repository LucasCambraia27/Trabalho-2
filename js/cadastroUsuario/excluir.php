<?php
include_once("../Service/Banco.php");

if (isset($_GET['id']) ) {
  
  $banco = new Banco();

  
  $id = $_GET['id'];
  
  $sql = "delete from usuario
          where id = $id";

  $banco->exec($sql);
  
  header('Location: index.php');
}

?>