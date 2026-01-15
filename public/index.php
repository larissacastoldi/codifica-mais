<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(1, $_POST['email']);
    $statement->execute();

    $usuario = $statement->fetch();

    if ($usuario && password_verify($_POST['senha'], $usuario['senha'])) {
        $_SESSION['usuario'] = $usuario['nome'];
        header('Location: controle.php');
        exit;
    }
}

if (isset($_SESSION['usuario'])) {
    header('Location: controle.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="box">
    <h2>Login</h2>

    <form method="post" action="index.php">
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Entrar</button>
    </form>

    <a href="registro.php">Crie sua conta</a>
</div>

</body>
</html>

