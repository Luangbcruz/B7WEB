<?php

//DADOS DO PHP


if(!empty($_POST['login']) && !empty($_POST['password'])){


    //ADMIN / ADMIN
    $login= htmlspecialchars($_POST['login']);
    $password= htmlspecialchars($_POST['password']);

    if($login== 'ADMIN' && $password== 'ADMIN'){

        $msg= 'Login efetuado com sucesso';
    } else{
        $msg= 'Falha no login';
    }
} else{
    $msg= 'Preencha todos os campos';
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de login</title>
</head>
<body>
   <form action="dados.php" method="POST">
    
    <input type="text" name="login" placeholder="Digite o login" value="<?=$login ?? ' ' ?>"><br>
    <input type="password" name="password" placeholder="Digite a senha" value="<?=$password ?? ' '?>">
    <input type="submit" value="Enviar">
    <?php
        if($_SERVER['REQUEST_METHOD']== 'POST'){
            echo $msg;
        }
    ?>
   </form>
</body>
</html>