\\Escreva um código PHP que solicita ao usuário dois números inteiros, a e b,
e calcula a soma de todos os números ímpares no intervalo [a, b] (inclusive).
Certifique-se de que a seja menor ou igual a b. Se a for maior que b, solicite
ao usuário que insira novamente os valores.

<?php
do {
    $a = readline("Digite o valor de a: ");
    $b = readline("Digite o valor de b: ");

    if ($a > $b) {
        echo "Erro: 'a' deve ser menor ou igual a 'b'. Tente novamente.\n";
    }
} while ($a > $b);

$somaImpares = 0;

for ($i = $a; $i <= $b; $i++) {
    if ($i % 2 != 0) {
        $somaImpares += $i;
    }
}

echo "A soma de todos os números ímpares entre $a e $b é: $somaImpares\n";