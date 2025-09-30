<?php
// php-a6: SISTEMA DE CONTROLE DE NOTAS
// Você foi contratado para desenvolver um sistema de controle de notas de uma turma. Sua
// tarefa é criar um programa que automatize o processo de cálculo da média das notas dos
// alunos e determine se cada aluno foi aprovado ou reprovado com base em critérios
// predefinidos. Aqui está o que o programa deve fazer:
// 1 - Crie uma variável em array para armazenar as notas dos alunos. Utilize o array abaixo:
// $notasAlunos = [
//  [8.5, 6.0, 7.8, 9.2, 5.5], // Aluno 1
//  [7.0, 8.0, 6.5, 7.5, 8.5], // Aluno 2
//  [6.5, 7.5, 4.5, 5.5, 7.0], // Aluno 3
//  [5.0, 4.6, 7.8, 9.0, 6.0] // Aluno 4
// ];
// 2 - Crie uma função chamada calcularMedia($notas) que receba as notas de cada aluno
// como parâmetro e retorne a média das notas.
// 3 - Após calcular a média de cada aluno, utilize uma estrutura condicional para determinar se
// o aluno foi aprovado ou reprovado. Considere que a média mínima para aprovação é 7.0.
// 4 - Imprima o resultado para cada aluno, indicando se ele foi aprovado ou reprovado,
// juntamente com sua média.
// 5 - Imprima o total de alunos aprovados e reprovados


$notasAlunos = [
    [8.5, 6.0, 7.8, 9.2, 5.5], // Aluno 1
    [7.0, 8.0, 6.5, 7.5, 8.5], // Aluno 2
    [6.5, 7.5, 4.5, 5.5, 7.0], // Aluno 3
    [5.0, 4.6, 7.8, 9.0, 6.0]  // Aluno 4
];
function calcularMedia($notas) {
    $soma = array_sum($notas);
    $quantidade = count($notas);
    return $soma / $quantidade;
}
$aprovados = 0;
$reprovados = 0;

foreach ($notasAlunos as $indice => $notas) {
    $media = calcularMedia($notas);
    echo "Aluno " . ($indice + 1) . " - Média: " . number_format($media, 2) . " - ";
    if ($media >= 7.0) {
        echo "Aprovado\n";
        $aprovados++;
    } else {
        echo "Reprovado\n";
        $reprovados++;
    }
}
echo "Total de alunos aprovados: $aprovados\n";
echo "Total de alunos reprovados: $reprovados\n";
