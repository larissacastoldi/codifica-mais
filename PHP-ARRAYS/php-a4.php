<?php
// php-a4: SISTEMA DE COMPRAS (CÁLCULO DE DESCONTO)
// Você está desenvolvendo um sistema de compras online e precisa calcular o valor final de
// um produto com desconto. Sua tarefa é criar uma função que receba o valor original do
// produto e a porcentagem de desconto como parâmetros, e retornar o valor final com o
// desconto aplicado. Aqui está o que o programa deve fazer:
// 1 - Crie uma função que receba o valor original do produto e a porcentagem de desconto
// como parâmetros.
// 2 - Dentro da função, calcule o valor do desconto aplicando a porcentagem sobre o valor
// original.
// 3 - Subtraia o valor do desconto do valor original para obter o valor final com desconto.
// 4 - Retorne o valor final com desconto.
$valor = readline("Digite o valor da sua compra:");
$porcentagem = readline("Digite a porcentagem de desconto:");
function desconto ($valor,$porcentagem){
    $valorFinal= $valor - ($valor * $porcentagem /100);
        return $valorFinal;
}

echo "O valor final com desconto é: ",desconto($valor, $porcentagem)," reais";