<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST['senha'] !== $_POST['confirmar']) {
        $erro = "Senhas não conferem";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $erro = "E-mail inválido";
    } else {

        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(1, $_POST['nome']);
        $stmt->bindValue(2, $_POST['email']);
        $stmt->bindValue(3, password_hash($_POST['senha'], PASSWORD_DEFAULT));
        $stmt->execute();

        header('Location: index.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card">
    <h2>Registro</h2>

    <form method="post">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <input type="password" name="confirmar" placeholder="Confirmar senha" required>
        <button type="submit">Criar conta</button>
    </form>

    <a href="index.php">Cancelar</a>
</div>

</body>
</html>