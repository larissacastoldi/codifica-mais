\\Escreva um script PHP que solicita ao usuário uma série de números inteiros
até que ele digite um valor específico (por exemplo, -1) para parar a entrada.
O script deve então determinar e exibir o maior e o menor número digitado
pelo usuário.
Exemplo:

<?php
$maior = null;
$menor = null;

while (true) {
    echo "Digite um número (ou -1 para terminar): ";
    $input = trim(fgets(STDIN));
    $numero = (int)$input;

    if ($numero === -1) {
        break;
    }

    if ($maior === null || $numero > $maior) {
        $maior = $numero;
    }

    if ($menor === null || $numero < $menor) {
        $menor = $numero;
    }
}

if ($maior === null || $menor === null) {
    echo "Nenhum número válido foi digitado.\n";
} else {
    echo "O maior número digitado foi: $maior\n";
    echo "O menor número digitado foi: $menor\n";
}