CREATE DATABASE gestao_produtos;
USE gestao_produtos;

CREATE TABLE produtos(
id_produtos INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(255),
descricao VARCHAR(100),
categoria VARCHAR(15),
preco DECIMAL(10,2),
peso DECIMAL(7,2),
quantidade INT,
fornecedor VARCHAR(100),
criado_em DATETIME DEFAULT NOW(),
atualizado_em DATETIME ON UPDATE NOW(),
deletado_em DATETIME DEFAULT NULL
);

CREATE TABLE fornecedores (
id_fornecedores INT PRIMARY KEY,
razao_social VARCHAR(100),
cnpj VARCHAR(14),
criado_em DATETIME DEFAULT NOW(),
atualizado_em DATETIME ON UPDATE NOW(),
deletado_em DATETIME DEFAULT NULL
);
