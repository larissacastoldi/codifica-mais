<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card">
    <h2>Painel</h2>
    <p>Olá, <?= $_SESSION['usuario'] ?>.</p>
    <p>Você está logado.</p>

    <a class="saida" href="saida.php">Deslogar</a>
</div>

</body>
</html>