//. Solicite ao usuário 2 números e informe qual é o maior entre eles. 
<?php
$numero1 = readline("Digite o primeiro número: ");
$numero2 = readline("Digite o segundo número: ");

if ($numero1 > $numero2) {
    echo "O maior número é: $numero1\n";
} elseif ($numero2 > $numero1) {
    echo "O maior número é: $numero2\n";
} else {
    echo "Os dois números são iguais.\n";
}
?>