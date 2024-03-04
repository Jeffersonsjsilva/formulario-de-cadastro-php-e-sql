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
        <h1>Realize o login</h1>
        <form action="testarlogar.php" method="POST">
            <input type="text" name="email" placeholder="E-mail" class="inputUser" required>
            <input type="password" name="senha" placeholder="Senha" class="inputUser" required>
            <input class="botaoNovo" type="submit" name="submit" value="Enviar" class="inputUser">
        </form>
    </div>
</body>
</html>