<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="box">
        <h1>Login</h1>
        <form action="testarlogar.php" method="POST">
            <input type="text" name="email" placeholder="E-mail" class="inputUser" required>
            <br><br>
            <input type="password" name="senha" placeholder="Senha" class="inputUser" required>
            <br><br><br>
            <input class="botaoNovo" type="submit" name="submit" value="Enviar" class="inputUser">
        </form>
    </div>
</body>
</html>