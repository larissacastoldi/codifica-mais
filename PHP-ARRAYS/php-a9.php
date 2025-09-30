<?php
// php-a9: ARRAYS ASSOCIATIVOS
// 1 - Crie uma variável em array para armazenar o estoque de produtos de uma loja. Utilize o
// array abaixo:
// $estoque = [
//  [“Bermuda”, 59.9, 6], // Produto 1
//  [“Camisa”, 89.9, 5], // Produto 2
//  [“Sapato”, 179.9, 10], // Produto 3
//  [“Calça”, 99.9, 7] // Produto 4
// ];
// 2 – Você deve calcular e imprimir o valor total que a loja tem de estoque, no array que segue
// o padrão [nome , valor, quantidade]. Resultado esperado: R$ 3.307,20


// Array de estoque (nome, valor, quantidade)
$estoque = [
    ["Bermuda", 59.9, 6], 
    ["Camisa", 89.9, 5], 
    ["Sapato", 179.9, 10], 
    ["Calça", 99.9, 7]
];


$valorTotal = 0;


foreach ($estoque as $produto) {
    $nome = $produto[0];
    $valor = $produto[1];
    $quantidade = $produto[2];

    $valorTotal += $valor * $quantidade;
}


echo "Valor total em estoque: R$ " . number_format($valorTotal, 2, ',', '.') . "\n";

