<?php
include_once("../Service/Banco.php");

if (isset($_GET['nome']) && isset($_GET['senha']) && isset($_GET['id'])) {
  
  $banco = new Banco();
  
  $nome = $_GET['nome'];
  $senha = $_GET['senha'];
  $id = $_GET['id'];
  
  $sql = "update usuario 
          set nome='$nome',
              senha='$senha'
          where id = '$id'
          ";

  $banco->exec($sql);
  
  header('Location: index.php');
}

?>