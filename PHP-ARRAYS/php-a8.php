<?php
// php-a8: CÁLCULO DE DESCONTO PROGRESSIVO
// Crie um programa que calcule o valor final de uma compra com desconto progressivo. O
// programa deve conter as seguintes funções:
// 1 - aplicarDesconto($valorCompra, $percentualDesconto): Recebe o valor da compra e
// o percentual de desconto como parâmetros e retorna o valor final com o desconto aplicado.
// 2 - calcularDescontoProgressivo($valorCompra): Recebe o valor da compra como
// parâmetro e retorna o valor final com o desconto progressivo aplicado.
// ● Se o valor da compra for menor que R$ 100,00, não há desconto.
// ● Se o valor da compra for entre R$ 100,00 e R$ 500,00, aplica-se um desconto de
// 10%.
// ● Se o valor da compra for maior que R$ 500,00, aplica-se um desconto de 20%.
// O programa deve solicitar ao usuário o valor da compra e exibir o valor final após a
// aplicação do desconto progressivo.

function aplicarDesconto($valorCompra, $percentualDesconto) {
    $valorFinal = $valorCompra - ($valorCompra * $percentualDesconto / 100);
    return $valorFinal;
}


function calcularDescontoProgressivo($valorCompra) {
    if ($valorCompra < 100) {
        return $valorCompra; // sem desconto
    } elseif ($valorCompra >= 100 && $valorCompra <= 500) {
        return aplicarDesconto($valorCompra, 10); // 10%
    } else { 
        return aplicarDesconto($valorCompra, 20); // 20%
    }
}

$valorCompra = (float) readline("Digite o valor da compra: ");

$valorFinal = calcularDescontoProgressivo($valorCompra);

echo "Valor da compra original: R$ " . number_format($valorCompra, 2, ',', '.') . "\n";
echo "Valor final com desconto progressivo: R$ " . number_format($valorFinal, 2, ',', '.') . "\n";

