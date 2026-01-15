<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}

$nomeUsuario = htmlspecialchars($_SESSION['usuario']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel de Controle</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="painel-box">
    <h2>Painel</h2>
    
    <p>Olá, <?php echo $nomeUsuario; ?>.</p>
    <p>Você está logado.</p>

    <form action="saida.php" method="post">
        <button type="submit" class="logout">Deslogar</button>
    </form>
</div>

</body>
</html>