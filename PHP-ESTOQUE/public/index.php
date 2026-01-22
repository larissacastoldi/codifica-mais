<?php
// ATIVAR EXIBIÇÃO DE ERROS PARA DEBUG (Remova estas 3 linhas na entrega final)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Define o caminho para o arquivo de conexão
$caminho_conexao = __DIR__ . '/../src/visualizacao-da-web/conexao-db.php';

// Testa se o arquivo de conexão existe fisicamente antes de incluir
if (file_exists($caminho_conexao)) {
    require_once $caminho_conexao;
} else {
    die("ERRO CRÍTICO: Arquivo de conexão não encontrado em $caminho_conexao");
}

// Testa se a variável $conexao foi criada depois de incluir o arquivo
if (!isset($conexao) || $conexao === null) {
    die("ERRO CRÍTICO: A variável \$conexao não foi definida no arquivo de conexão. Verifique o código dentro de conexao-db.php.");
}

$pagina_atual = $_GET['rota'] ?? 'listagem';

$pagina_atual = $_GET['rota'] ?? 'listagem';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gestão de Estoque</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="container">
            <strong>PHP-ESTOQUE</strong>
            <div>
                <a href="index.php?rota=listagem">Listagem</a>
                <a href="index.php?rota=cadastro">Novo Cadastro</a>
            </div>
        </nav>
    </header>

    <main class="container">
        <?php
        switch ($pagina_atual) {
            case 'listagem':
                include __DIR__ . '/../src/visualizacao-da-web/listagem.php';
                break;
            case 'cadastro':
                include __DIR__ . '/../src/visualizacao-da-web/cadastro.php';
                break;
            case 'editar':
                include __DIR__ . '/../src/visualizacao-da-web/editar.php';
                break;
            case 'salvar':
                include __DIR__ . '/../src/acoes/db-salvar.php';
                break;
            case 'excluir':
                include __DIR__ . '/../src/acoes/db-excluir.php';
                break;
            default:
                echo "<h2>Página não encontrada!</h2>";
        }
        ?>
    </main>
</body>
</html>
