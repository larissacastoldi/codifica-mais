SELECT 
	produtos.nome,
    produtos.preco,
    produtos.quantidade,
    f.razao_social,
    f.cnpj
FROM produtos 
JOIN fornecedores f  # quando coloco alguma coisa na frente do nome da coluna ele entende o apelido colocado.
ON produtos.fornecedor = f.id_fornecedores
