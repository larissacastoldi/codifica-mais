<?php
class Produto {
    private string $nome;
    private float $preco;
    private int $quantidade;

public function __construct (
    string $nome,
    float $preco,
    int $quantidade
    )
{
    $this -> nome = $nome;
    $this -> preco = $preco;
    $this -> quantidade = $quantidade;
}
public function alterarPreco ($novoPreco){
    if ($novoPreco <= 0) {
    echo"Você não pode por um preço menor do que 0";
    }
    else {
    $this -> preco = $novoPreco;
    }
}
public function alterarQuantidade ($novaQuantidade){
     if ($novaQuantidade < 0) {
    echo"Você não pode por uma quantidade menor do que 0";
    }
    else {
    $this -> quantidade = $novaQuantidade;
}}
public function exibirDetalhes (){
    return "DETALHES DO PRODUTO " ."\n" . "Nome: " . $this -> nome ."\n". "Preço: R$ " . $this -> preco ."\n". "Quantidade: " . $this -> quantidade;
}
}
$produto = new Produto("Colar", 59.99, 5);
$produto-> alterarPreco(49.99);
$produto-> alterarQuantidade(3);
echo $produto-> exibirDetalhes();