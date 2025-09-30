<?php
// php-a5: CALCULADORA DE IMC (ÍNDICE DE MASSA CORPORAL)
// Solicite ao usuário seu peso (em quilogramas) e altura (em metros) e calcule o IMC utilizando
// a fórmula: IMC = peso / (altura * altura).
// Depois de obter o resultado de IMC, deve-se interpretar o valor utilizando a seguinte tabela:
// IMC Classificação
// Menor que 18,5 Magreza
// 18,5 a 24,9 Normal
// 25 a 29,9 Sobrepeso
// 30 a 34,9 Obesidade grau I
// 35 a 39,9 Obesidade grau II
// Maior que 40 Obesidade grau III
// Imprima o resultado do IMC (kg/m²) mais o resultado da classificação
$peso = readline("Qual é o seu peso em kg? ");
$altura = readline("Qual é a sua altura? ");
$IMC = $peso/($altura*$altura);
if ($IMC <18.5){
    echo "Magreza";
}
elseif ($IMC >= 18.5 && $IMC <= 24.9){
    echo "Normal";
}
elseif ($IMC >=25 && $IMC <=29.9){
    echo "Sobrepeso";
}
elseif ($IMC >=30 && $IMC <=34.9){
    echo "Obesidade grau I";
}
elseif ($IMC >=35 && $IMC <=39.9){
    echo "Obesidade grau II";
}
else {
    echo "Obesidade grau III";
}
