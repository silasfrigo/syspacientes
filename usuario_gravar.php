<?php
    session_start();
    require_once('variaveis.php');
    require_once('conexao.php');
    

    //REQUEST VARIABLES
    $id_user = $_REQUEST['inputIdUsuario'];
    $input_name = $_REQUEST['inputNome'];
    $input_email = $_REQUEST['inputEmail'];
    $input_password = $_REQUEST['inputPassword'];

    $errors = "";
    $validate = false;
    
   
    if(strlen($input_password) <6){
        $errors .=" A password é muito curta";
        
    }

    if(empty($input_name) || empty($input_email) || empty($input_password)){
        $errors .=" nome, email ou senha estão vazios! ";
       
    }

    if($errors === ""){
        $errors = " Usuario foi editado com sucesso " . $input_name;
        $validate = true;
        
    }

    
    
    
    if($validate === true){
        //atualizar
        $sql = "UPDATE usuarios SET nome= '{$input_name}' , email= '{$input_email}' , senha= {$input_password} WHERE id= {$id_user} " ;
        mysqli_query($conexao_bd, $sql);
        header("location:admin.php?erro=$errors");
     }else{
        header("location:index.php?erro=$errors");
     }

     

     mysqli_close($conexao_bd);
     

?>
