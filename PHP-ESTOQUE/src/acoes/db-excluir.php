<?php
$id_alvo = $_GET['id'] ?? null;

if ($id_alvo) {
    $comando = $pdo->prepare("DELETE FROM produtos WHERE id = ?");
    $comando->execute([$id_alvo]);
}

header("Location: index.php?rota=listagem");
exit;
