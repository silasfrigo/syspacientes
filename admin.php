<?php
   require_once('variaveis.php');
   require_once('conexao.php');

   $id_usuario = $_GET["id_usuario"];
   $nome_usuario = "";

   $sql = "SELECT nome FROM usuarios WHERE id = " . $id_usuario;
   $resp = mysqli_query($conexao_bd, $sql);
   if($rows=mysqli_fetch_row($resp)){
      $nome_usuario = $rows[0];
   }
   


   $onload = "";
   $erro   = $_GET['erro'];
   
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SysPacientes</title>
    <link rel="icon" href="img/favicon/favicon2.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        
      </div>
    </nav>

    
    
    
    <div class="jumbotron">
      <?php
        print_r($erro);
        echo "<h3>". $nome_usuario .   "</h3>";
      ?>

    
    
        <p>Bem vindo o seu login foi feito com sucesso! </p>
        <table class='table table-striped table-dark' style='width:100%'>
    
      <thead>
            <tr>
              <th scope='col'>Nome</th>
              <th scope='col'>Editar Cadastro</th>
              
            </tr>
          </thead>
  
      <?php
         
         $sql = "SELECT id, nome FROM usuarios ORDER BY Nome";
         $resp = mysqli_query($conexao_bd, $sql);
         while($rows = mysqli_fetch_row($resp)){
            $idUsuario   = $rows[0];
            $nomeUsuario = $rows[1];
            echo "<tr>";
            echo("<td style='width:49%' class='text-white bg-info'> $nomeUsuario </td>");
            echo("<td style='width:51%'><a class='btn btn-lg btn-success' href='usuario.php?idUsuario=$idUsuario' role='button'>...</a></td>");
            echo "</tr>";
         } 
         mysqli_close($conexao_bd);
         echo "</table></div>";
     ?> 
     
    
    
    </div>

    </div> 

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>




    

    



