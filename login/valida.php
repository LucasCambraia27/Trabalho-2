 <?php

  include_once("../Service/Banco.php");

  if (isset($_POST['loginUsuario']) && isset($_POST['senhaUsuario']) ) {
    $banco = new Banco();

    $login = $_POST['loginUsuario'];
    $senha = $_POST['senhaUsuario'];
    
    $sql = "select * from usuario
            where nome = '$login' and senha = '$senha'";
 
      $registros = $banco->query($sql);

      if ( ! empty($registros) ) {
        
        foreach ($registros as $linha) { 
          
          if ($linha['nome'] == $login && $linha['senha']==$senha) {
            
            echo '
            <script>
              window.location.replace("https://trabalho-2.lucascambraia.repl.co/cadastroUsuario/teladeconsulta.php");
            </script>
          ';
            
            die();
          }          
          
        }//fim foreach

        echo '
            <script>
              window.location.replace("https://trabalho-2.lucascambraia.repl.co/cadastroUsuario/index.php");
            </script>
          ';
         
      }else {
        echo '
            <script>
              window.location.replace("https://trabalho-2.lucascambraia.repl.co/cadastroUsuario/index.php");
            </script>
          ';
      }
    
  }
    

    

    
    ?>