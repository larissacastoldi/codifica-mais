<!-- CREATE DATABASE estoque CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE estoque;

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_item VARCHAR(100) NOT NULL,
    descricao TEXT NULL,
    quantidade INT NOT NULL,
    valor_unidade DECIMAL(10,2) NOT NULL,
    imagem VARCHAR(255) DEFAULT NULL
);


