<?php

//header envia o cabeçalho
    session_start();


    if(!empty($_POST['usuário']) && !empty($_POST['password'])){

        $usuario= htmlspecialchars($_POST['usuário']);
        $senha= htmlspecialchars($_POST['password']);
    
        if($usuario == 'admin' && $senha == 'admin'){
            $_SESSION['usuario'] = $usuario;
            header('location: welcome.php');
        } else{
            echo 'Usuário ou senha inválidos';
            echo '<a href= "index.php"> voltar </a>';
        }
    } else {
        echo 'Usuário ou senha inválidos';
        echo '<a href= "index.php"> voltar </a>';
        
    }
 

    

?>