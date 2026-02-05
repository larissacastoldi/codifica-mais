<?php
// Consulta os produtos
$query = $pdo->query("SELECT * FROM produtos ORDER BY id DESC");
$itens = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="card-listagem">
    <div class="topo-listagem">
        <h2>Itens em Estoque</h2>
        <a href="index.php?rota=cadastro" class="item-novo">+ Novo Item</a>
    </div>

    <table class="tabela-estoque">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nome do Produto</th>
                <th>Qtd</th>
                <th>Preço</th>
                <th style="text-align: center;">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($itens as $i): ?>
            <tr>
                <td>
                    <div class="foto-produto-lista">
                        <?php if($i['imagem']): ?>
                            <img src="uploads/<?= $i['imagem'] ?>" alt="Foto">
                        <?php else: ?>
                            <span class="sem-foto">📷</span>
                        <?php endif; ?>
                    </div>
                </td>
                <td>
                    <span class="nome-item-tabela"><?= htmlspecialchars($i['nome_item']) ?>
                    <br><small class="desc-item-tabela"><?= htmlspecialchars($i['descricao']) ?></small>
                </td>
                <td>
                    <?php
                        // --- AQUI ESTÁ A CORREÇÃO ---
                        // Se $i['quantidade'] for NULL no banco de dados, o PHP usará 0 por padrão.
                        $quantidade_exibida = $i['quantidade'] ?? 0;
                        $classe_estoque = ($quantidade_exibida < 5) ? 'baixo-estoque' : '';
                    ?>
                    <span class="badge-qtd <?= $classe_estoque ?>">
                        <?= $quantidade_exibida ?> un
                    </span>
                </td>
                <td class="preco-tabela"><strong>R$ <?= number_format($i['valor_unidade'], 2, ',', '.') ?></strong></td>
                <td style="text-align: center;">
                    <a href="index.php?rota=editar&id=<?= $i['id'] ?>" class="link-acao editar">Editar</a>
                    <a href="index.php?rota=excluir&id=<?= $i['id'] ?>" class="link-acao excluir" onclick="return confirm('Excluir este item?')">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
