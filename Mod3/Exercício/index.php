<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="post" action="login.php">
        <label for="username">Usuário:</label>
        <input type="text" name="usuario"><br>
        
        <label for="password">Senha:</label>
        <input type="password" name="password"><br>
        
        <label for="lembrar">Tema Preferido:</label>
        <select name="tema">
            <option value="escuro">escuro</option>
            <option value="claro">claro</option>
        </select><br>
        
        <input type="submit" value="Login">
    </form>
</body>
</html>
