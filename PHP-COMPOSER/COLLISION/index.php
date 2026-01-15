<?php

require __DIR__ . '/vendor/autoload.php';

use NunoMaduro\Collision\Provider;

// Ativa o collision
(new Provider)->register();

// Agora, qualquer erro lançado será mostrado de forma bonita no terminal.




// //variavel nao definida
// echo $ola; 

// não se pode dividir por 0
$a = 10;
$b = 0;
$result = $a / $b;
echo $result;

//o tipo atribuido não foi seguido
// function soma(int $a, int $b) {
//     return $a + $b;
// }
// echo soma("um", 2);

//PARA TESTAR OUTROS ERROS TIRE O COMENTÁRIO DO QUE QUER TESTAR E COLOQUE E COMENTE O QUE ESTAVA SEM ESTAR COMENTADO,
//O PROJETO SÓ IDENTIFICA UM ERRO DE CADA VEZ