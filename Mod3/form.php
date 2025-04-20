<?php

//DADOS DO PHP


if(!empty($_POST['login']) && !empty($_POST['password'])){


    //ADMIN / ADMIN
    $login= htmlspecialchars($_POST['login']);
    $password= htmlspecialchars($_POST['password']);

    if($login== 'ADMIN' && $password== 'ADMIN'){
        echo 'Login efetuado com sucesso';
    } else{
        echo 'Falha no login';
    }

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
    
    <input type="text" name="login" placeholder="Digite o login"><br>
    <input type="password" name="password" placeholder="Digite a senha">
    <input type="submit" value="Enviar">
   </form>
</body>
</html>