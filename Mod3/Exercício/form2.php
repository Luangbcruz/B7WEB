<?php

require 'functions.php';

$erro = '';
$sucesso = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $texto = trim(htmlspecialchars($_POST['texto'] ?? ''));

    if (empty($texto)) {
        $erro = "O campo texto é obrigatório.";
    } elseif (strlen($texto) > 100) {
        $erro = "O texto não pode ter mais que 100 caracteres.";
    } else {
        $sucesso = "Texto validado com sucesso!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>
<body>

    <?php if (exibirErro($erro)) : ?>
        <p style="color:red">
            <?= $erro; ?>
        </p>
    <?php endif; ?>

    <?php if (exibirErro($sucesso)) : ?>
        <p style="color:green">
            <?= $sucesso; ?>
        </p>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="texto" placeholder="Digite o texto" />
        <input type="submit" value="Enviar" />
    </form>

</body>
</html>
