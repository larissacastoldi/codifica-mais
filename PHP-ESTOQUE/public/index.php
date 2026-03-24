<?php
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../src/visualizacao-da-web/conexao-db.php';

$rotaAtual = $_GET['rota'] ?? 'listagem';

if ($rotaAtual === 'salvar') {
    require_once __DIR__ . '/../src/acoes/db-salvar.php';
    exit;
}

if ($rotaAtual === 'excluir') {
    require_once __DIR__ . '/../src/acoes/db-excluir.php';
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Sistema de Estoque</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <nav class="estoque">
        <h1>Sistema de Estoque</h1>
        <div>
            <a href="index.php?rota=listagem">Listagem</a>
            <a href="index.php?rota=cadastro">Novo Item</a>
        </div>
    </nav>
</header>

<main class="container">

<?php
switch ($rotaAtual) {
    case 'cadastro':
        include __DIR__ . '/../src/visualizacao-da-web/cadastro.php';
        break;

    case 'editar':
        include __DIR__ . '/../src/visualizacao-da-web/editar.php';
        break;

    default:
        include __DIR__ . '/../src/visualizacao-da-web/listagem.php';
}
?>

</main>
</body>
</html>