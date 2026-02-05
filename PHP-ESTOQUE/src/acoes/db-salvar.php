<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // RECEBE DADOS
    $id_produto = $_POST['id_produto'] ?? null;
    $nome = $_POST['nome'] ?? '';
    $descricao = $_POST['descricao'] ?? '';
    
    $quantidade_input = $_POST['quantidade'] ?? $_POST['qtd'] ?? 0;
    $quantidade = filter_var($quantidade_input, FILTER_VALIDATE_INT);

    $preco = filter_var($_POST['preco'] ?? 0.0, FILTER_VALIDATE_FLOAT);
    $nome_foto = null;

  
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
    
        $nome_foto = time() . "." . $extensao; 
        // ENVIA FOTO PARA PASTA 
        move_uploaded_file($_FILES['foto']['tmp_name'], "uploads/" . $nome_foto);
    }
    if ($id_produto) {
        if ($nome_foto) {
            $sql = "UPDATE produtos SET nome_item=?, descricao=?, quantidade=?, valor_unidade=?, imagem=? WHERE id=?";
            $pdo->prepare($sql)->execute([$nome, $descricao, $quantidade, $preco, $nome_foto, $id_produto]);
        } else {
            $sql = "UPDATE produtos SET nome_item=?, descricao=?, quantidade=?, valor_unidade=? WHERE id=?";
            $pdo->prepare($sql)->execute([$nome, $descricao, $quantidade, $preco, $id_produto]);
        }
    } else {
        $sql = "INSERT INTO produtos (nome_item, descricao, quantidade, valor_unidade, imagem) VALUES (?, ?, ?, ?, ?)";
        $pdo->prepare($sql)->execute([$nome, $descricao, $quantidade, $preco, $nome_foto]);
    }

    header("Location: index.php?rota=listagem");
    exit;
}
?>
