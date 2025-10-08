<?php

$estoque = [];
function exibirMenu(){
    echo '(1) Adicionar um produto' . PHP_EOL;
    echo'(2) Vender um produto' . PHP_EOL;
    echo'(3) Verificar o estoque' . PHP_EOL;
    echo '(4) Listar o estoque' . PHP_EOL;
    echo '(5) Sair' . PHP_EOL;
};

function adicionarProduto(&$estoque, $codigo, $nomeProduto, $tamanho, $cor, $quantidade){
    //Montando o array produto
    $produto = [
        'codigo' => $codigo,
        'nomeProduto' => $nomeProduto,
        'tamanho' => $tamanho,
        'cor' => $cor,
        'quantidade' => $quantidade
    ];
    //Adicionando o produto ao estoque
    $estoque[$codigo] = $produto;
}

function listarEstoque($estoque){
    foreach($estoque as $produto){
        echo "Código do produto: " . $produto['codigo'] . PHP_EOL;
        echo "Nome do produto :" . $produto['nomeProduto'] . PHP_EOL;
        echo "Tamanho do produto: " . $produto['tamanho'] . PHP_EOL;
        echo "cor do produto: " . $produto['cor'] . PHP_EOL;
        echo "quantidade do produto: " . $produto['quantidade'] . PHP_EOL;
    }
}

function verificarEstoque($estoque, $codigo){
    /*
        Verificando se há um produto no estoque com o codigo informado.
        Se tiver retornará 1
        Senão tiver retornará 0
    */
    $produtoDisponivel = count($estoque[$codigo]);
    return $produtoDisponivel;
}

function venderProduto($estoque, $codigo, $quantidade){

}

while($opção != 5){
    exibirMenu();
    $opção = readline('Escolha uma opção: ');
    if ($opção == 1){
        $codigo = readline('Digite o código do produto:' . PHP_EOL);
        $nomeProduto = readline('Digite o nome do produto:' . PHP_EOL);
        $tamanho = readline('Digite o tamanho do produto:' . PHP_EOL);
        $cor = readline('Digite a cor do produto:' . PHP_EOL);
        $quantidade = readline('Digite a quantidade do produto:' . PHP_EOL);
        adicionarProduto($estoque, $codigo, $nomeProduto, $tamanho, $cor, $quantidade);
    } 
    elseif ($opção == 2){
        //venderProduto($estoque);
        $codigo = readline('Digite o código do produto que venderá:');
        $quantidade = readline('Digite a quantidade do produto que venderá:');
        $produtoDisponivel = verificarEstoque($estoque, $codigo);

        if ($produtoDisponivel = 0){
            echo "Esse produto está esgotado";
        }
        else {
            $produto = $estoque[$codigo];
            if ($produto['quantidade'] >= $quantidade){
                $produto['quantidade'] = $produto['quantidade'] - $quantidade;
            }
            else {
                echo 'Não tem essa quantidade no seu estoque, ' . 'existem:' . $produto['quantidade'];
                //$continuar = readline('Deseja comprar outra quantidade? (Y/N)');
           
            }
        }
    }


    elseif ($opção == 3){
       verificarEstoque($estoque);
    }
    elseif ($opção == 4){
        listarEstoque($estoque);
    }
    
}


// else if ($opção == 2){
// function venderProduto($estoque, $codigo, $quantidade){
// // uset?usar remover a variavel? ou o valor????  
// };

// else if ($opção == 3){
// function verificarEstoque($estoque, $codigo){

// //tenho que usar array_diff?

// }
// else if ($opção == 4){
// function verificarEstoque($estoque){
//     foreach($estoque as $listarestoque) {
//         echo $listarestoque . '<br>'; //vi que é assimq ue lista (<br>) faz exibir cada um em uma linha
//     }
// }
