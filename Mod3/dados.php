<?php

//DADOS DO PHP

// $nome= $_GET['pessoa'];
// $idade= $_GET['idade'];

// echo "olá, $nome, você tem $idade.";


//isset()- verifica se variável foi setada

//empty()- verifica se variável foi setada e se tem valor

// if(!empty($_GET['campanha'])){

//     $numeroCampanha= $_GET['campanha'];

//     echo 'você veio pela campanha ' . $numeroCampanha;
// } else{
//     echo 'Variável não definida';
// }

// if(!empty($_POST['login'] && !empty($_POST['password']))){
//     $login= htmlspecialchars($_POST['login']);
//     $password= htmlspecialchars($_POST['password']);

//     echo "seu login è: $login e a senha: $password";

// }



//Verifica se os dados do formulário foram enviados

if (!empty($_POST['login']) && !empty($_POST['password'])) {
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);
    $mensagem= null;
    if($login== 'admin' && $password== 'admin'){
        $mensagem= "Você logou com sucesso";
    } else{
        $mensagem= "Usuário ou senha inválidos";
    };
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="dados.php" method="POST">

        <input type="text" name="login" placeholder="Digite o login"><br>
        <input type="password" name="password" placeholder="Digite a senha">
        <input type="submit" value="Enviar">
        <?php
        if(!empty($mensagem)){
            echo $mensagem;
        };
            
        ?>
    </form>
</body>

</html>