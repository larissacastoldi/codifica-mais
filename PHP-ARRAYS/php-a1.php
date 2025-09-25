<?php 
// /php-a1: CÁLCULO DE GORJETA EM UM RESTAURANTE
// Crie um programa que calcule a gorjeta a ser paga em um restaurante. O programa deve
// solicitar ao usuário o valor total da conta e a porcentagem da gorjeta. Em seguida, o programa
// deve calcular o valor da gorjeta e o valor total a ser pago, incluindo a gorjeta.
// Exemplo:
// ● Valor da conta: R$ 120,00
// ● Porcentagem da gorjeta: 10%
// ● Valor da gorjeta: R$ 12,00
// ● Valor total a ser pago: R$ 132,00

$valorDaConta = readline("Digite o valor total da conta:");
$porcentagem = readline("Digite o valor da porcentgem da gorjeta:");
$valorGorjeta = $valorDaConta * $porcentagem / 100;
$valorTotal = $valorDaConta + $valorGorjeta;

$conta = [
	"valor da conta" => $valorDaConta,
	"porcentagem" => $porcentagem,
	"valor da gorjeta" => $valorGorjeta,
	"valor total a ser pago" => $valorTotal
];

$var = "!";
print_r($conta);
echo "Valor da conta: R$ $valorTotal";
