<?php
// php-a7: Você está organizando um churrasco com amigos e precisa dividir os custos
// igualmente entre todos. Sua tarefa é criar um programa que calcule quanto cada pessoa deve
// pagar com base nos itens comprados e no número de participantes. Aqui está o que o
// programa deve fazer:
// 1. Crie um array para armazenar os itens comprados no churrasco e outro array para
// armazenar o preço de cada item.
// 2. Solicite número total de participantes do churrasco.
// 3. Crie uma função que receba o valor total dos itens e o número de participantes como
// parâmetros, e retorne o valor que cada pessoa deve pagar.
// 4. Após calcular o valor que cada pessoa deve pagar, imprima o resultado, indicando
// quanto cada uma deve contribuir para o churrasco.
// 5. Imprima qual foi o item mais caro do churrasco.
// 6. Se o número de participantes for igual ou menor que um, imprima uma mensagem. “O
// churrasco foi cancelado, todo mundo furou!” 


$itens = ["Carne", "Refrigerante", "Carvão", "Farofa", "Pão de alho"];
$precos = [120.0, 40.0, 25.0, 15.0, 20.0];

$participantes = (int) readline("Digite o número total de participantes do churrasco: ");


if ($participantes <= 1) {
    echo "O churrasco foi cancelado, todo mundo furou!\n";
    exit;
}


function dividirCusto($valorTotal, $participantes) {
    return $valorTotal / $participantes;
}

$valorTotal = array_sum($precos);
$valorPorPessoa = dividirCusto($valorTotal, $participantes);

echo "Valor total do churrasco: R$ " . number_format($valorTotal, 2, ',', '.') . "\n";
echo "Cada pessoa deve contribuir com: R$ " . number_format($valorPorPessoa, 2, ',', '.') . "\n";

// 5 - Descobre item mais caro
$indiceMaisCaro = array_search(max($precos), $precos);
$itemMaisCaro = $itens[$indiceMaisCaro];
$valorMaisCaro = $precos[$indiceMaisCaro];

echo "O item mais caro do churrasco foi: $itemMaisCaro (R$ " . number_format($valorMaisCaro, 2, ',', '.') . ")\n";

