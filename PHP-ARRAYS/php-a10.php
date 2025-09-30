<?php
// php-a10: SISTEMA DE CONTROLE DE FUNCIONÁRIOS E SALÁRIOS
// Você foi contratado para desenvolver um sistema que gerencie os funcionários de uma
// empresa e seus respectivos salários. Considere as seguintes informações:
// Dados dos Funcionários:
// ● Funcionário 1: Pedro
// ○ Salário Base: R$ 2500,00
// ○ Horas Extras: 10
// ● Funcionário 2: Renata
// ○ Salário Base: R$ 3000,00
// ○ Horas Extras: 5
// ● Funcionário 3: Sérgio
// ○ Salário Base: R$ 2800,00
// ○ Horas Extras: 8
// ● Funcionário 4: Vanessa
// ○ Salário Base: R$ 3200,00
// ○ Horas Extras: 12
// ● Funcionário 5: André
// ○ Salário Base: R$ 1700,00
// ○ Horas Extras: Não tem
// Nota: Armazene os dados dos funcionários em um array
// Com base nas informações acima, aqui está o que o programa deve fazer:
// Funções para implementar:
// 1. calcularSalarioTotal($salarioBase, $horasExtras, $valorHoraExtra)
// a. Recebe o salário base, as horas extras e o valor da hora extra.
// b. Retorna o salário total do funcionário.
// 2. listarFuncionarios($funcionarios)
// a. Imprime todos os funcionários e suas respectivas informações (nome, salário
// base, horas extras, salário total).
// Procedimentos:
// 1. Imprimir a lista inicial de funcionários, salários base e horas extras.
// 2. Calcular o salário total de cada funcionário, considerando que o valor da hora extra é
// 1,5 vezes o valor da hora normal.
// 3. Imprimir o salário total de cada funcionário.
// Nota: Considere 160 horas trabalhadas por mês ao calcular o valor da hora normal.

// Array com dados dos funcionários
$funcionarios = [
    ["nome" => "Pedro",   "salarioBase" => 2500, "horasExtras" => 10],
    ["nome" => "Renata",  "salarioBase" => 3000, "horasExtras" => 5],
    ["nome" => "Sérgio",  "salarioBase" => 2800, "horasExtras" => 8],
    ["nome" => "Vanessa", "salarioBase" => 3200, "horasExtras" => 12],
    ["nome" => "André",   "salarioBase" => 1700, "horasExtras" => 0]
];

function calcularSalarioTotal($salarioBase, $horasExtras, $valorHoraExtra) {
    return $salarioBase + ($horasExtras * $valorHoraExtra);
}

function listarFuncionarios($funcionarios) {
    foreach ($funcionarios as $f) {
        echo "Funcionário: " . $f["nome"] . "\n";
        echo "Salário Base: R$ " . number_format($f["salarioBase"], 2, ',', '.') . "\n";
        echo "Horas Extras: " . $f["horasExtras"] . "\n";
        echo "\n";
    }
}


echo "=== LISTA INICIAL DE FUNCIONÁRIOS ===\n";
listarFuncionarios($funcionarios);

$horasMes = 160;
foreach ($funcionarios as &$f) {
    $valorHoraNormal = $f["salarioBase"] / $horasMes;
    $valorHoraExtra  = $valorHoraNormal * 1.5;
    $f["salarioTotal"] = calcularSalarioTotal($f["salarioBase"], $f["horasExtras"], $valorHoraExtra);
}
unset($f); 


echo "\n=== SALÁRIOS TOTAIS ===\n";
foreach ($funcionarios as $f) {
    echo $f["nome"] . " - Salário Total: R$ " . number_format($f["salarioTotal"], 2, ',', '.') . "\n";
}