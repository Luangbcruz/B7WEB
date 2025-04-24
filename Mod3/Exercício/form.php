<?php
// Inicializa variáveis de feedback
$erro = '';
$sucesso = '';

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe o texto e faz a sanitização
    $texto = htmlspecialchars($_POST['texto']);
    $texto = trim($texto);

    // Validações
    if (empty($texto)) {
        $erro = "O campo texto é obrigatório.";
    } elseif (strpos($texto, 'a') === false) {
        $erro = 'O texto precisa ter um "a".';
    } elseif (strlen($texto) < 5) {
        $erro = 'O texto tem que ter pelo menos 5 caracteres.';
    } elseif (strlen($texto) > 10) {
        $erro = 'O texto tem que ter no máximo 10 caracteres.';
    } else {
        $sucesso = 'Campo validado com sucesso!';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Validação de Texto</title>
</head>
<body>

<?php if (!empty($erro)) : ?>
    <p style="color:red">
        <?= $erro; ?>
    </p>
<?php endif; ?>

<?php if (!empty($sucesso)) : ?>
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
