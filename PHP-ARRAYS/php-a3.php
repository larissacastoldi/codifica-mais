<?php
// php-a3: CONVERSÃO DE TEMPERATURA
// Escreva um programa que converta a temperatura de Celsius para Fahrenheit e vice-versa.
// O programa deve solicitar ao usuário a temperatura e a unidade de medida (Celsius ou
// Fahrenheit), e então exibir o resultado da conversão.
// Fórmula de conversão:
// ● De Celsius para Fahrenheit: °F = (°C * 9/5) + 32
// ● De Fahrenheit para Celsius: °C = (°F - 32) * 5/9
// Exemplo:
// ● Temperatura: 25°C
// ● Temperatura em Fahrenheit: 77°F
$temperatura = readline("Qual é a temperatura? ");
$unidadeMedida = readline("Qual a unidade de medida? Digite C para Celsius e F para fahrenheit.");
if ($unidadeMedida == "C" || $unidadeMedida == "c"  ) {
    echo " Unidade em Fahrenheit é: ", ($temperatura * 9/5) + 32 ,"°F";
} elseif ($unidadeMedida == "F" || $unidadeMedida == "f"  ) {
    echo "Unidade em Celsius é: ", ($temperatura - 32) * 5/9, "°C";
} else {
    echo "Você digitou uma unidade inválida.";
}