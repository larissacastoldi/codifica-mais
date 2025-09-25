<?php
// php-a2: CÁLCULO DE ÁREA E PERÍMETRO DE UM RETÂNGULO
// Crie um programa que calcule a área e o perímetro de um retângulo. O programa deve
// solicitar ao usuário a largura e a altura do retângulo, e então exibir os resultados.
// Fórmulas:
// ● Área = largura * altura
// ● Perímetro = 2 * (largura + altura)
// Exemplo:
// ● Largura: 5 metros
// ● Altura: 3 metros
// ● Área: 15 m²
// ● Perímetro: 16 metros

$largura = readline("Digite a largura do retângulo: ");
$altura = readline("Digite a altura do retângulo: ");
echo "Área: ", $area = $largura * $altura, " m²" .PHP_EOL;
echo "Largura: ", $largura, " metros".PHP_EOL;
echo "Altura: ", $altura, " metros" .PHP_EOL;
echo "Perímetro: ",$perimetro = 2 * $area ," metros".PHP_EOL;