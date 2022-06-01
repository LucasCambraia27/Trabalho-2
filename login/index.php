<html>
  <head>
    <title>PHP Test</title>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script>
      let senha=123;
    </script>
  </head>
  <body>
    
    <div class = "container">

        <h1> Tela de Login </h1>
      
      <form action="valida.php" method="post">
          <div class="mb-3">
            <label for="login" class="form-label">Digite login</label>
            <input type="text" class="form-control" id="login" 
              name="loginUsuario"
              placeholder="nome do usuario">
          </div>
          <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senhaUsuario">
          </div>
    
          <input type="submit" value="Enviar" class="btn btn-primary">
        </form>

      <?php
      if (isset($_GET['erro'])){
        echo '<div class="alert alert-danger" role="alert">
                Login ou senha inválidos.
            </div>';
      }
      ?>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    
  </body>
</html>