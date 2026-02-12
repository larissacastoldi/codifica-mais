<?php
$id_produto = $_GET['id'] ?? die('ID do produto não especificado.');

$stmt = $pdo->prepare("SELECT * FROM produtos WHERE id = ?");
$stmt->execute([$id_produto]);
$produto = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$produto) {
    die('Produto não encontrado!');
}
?>

<h2> Editar Produto: <?= $produto['nome_item'] ?></h2>

<form action="index.php?rota=salvar" method="POST" class="formulario">
    
    <input type="hidden" name="id_produto" value="<?= $produto['id'] ?>">

    <div class="grupo-campo">
        <label>Nome do Item:</label>
        <input type="text" name="nome" required value="<?= $produto['nome_item'] ?>">
    </div>
    
    <div class="grupo-campo">
        <label>Descrição:</label>
        <textarea name="descricao" rows="3"><?= $produto['descricao'] ?></textarea>
    </div>

    <div class="grupo-campo">
        <label>Quantidade em Estoque:</label>
        <input type="number" name="qtd" required min="0" value="<?= $produto['quantidade'] ?>">
    </div>
    
    <div class="grupo-campo">
        <label>Preço Unitário (R$):</label>
        <input type="number" name="preco" step="0.01" required value="<?= $produto['valor_unidade'] ?>">
    </div>

    <button type="submit" class="btn-salvar">Salvar Alterações</button>
    <a href="index.php?rota=listagem" class="btn-cancelar">Cancelar</a>
</form>
