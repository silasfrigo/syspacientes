<?php
   $conexao_bd = mysqli_connect(
                  "localhost:3306",
                  "silas",
                  "1234",
                  "syspacientes");
   if(!$conexao_bd){
      echo "Não foi possível conectar no banco de dados: ";
      exit;
   }

?>