<?php
class ContaBancaria {
    private int $numeroDaConta;
    private string $nomeDoTitular;
    private float $saldo;

public function __construct (
    int $numeroDaConta,
    string $nomeDoTitular,
    float $saldo
    )
{
    $this -> numeroDaConta = $numeroDaConta;
    $this -> nomeDoTitular = $nomeDoTitular;
    $this -> saldo = $saldo;
}
public function depositar ($quantia){
    if ($quantia <= 0) {
    echo"Você não pode depositar um valor menor do que 0";
    }
    else {
    $this -> saldo += $quantia;
    }
}
public function sacar ($quantia){
    if ($quantia > $this -> saldo){
       echo "Você não tem esse valor". "<br>" . "Você tem " . $this -> saldo;
        return;
    }
    if ($quantia > 0) {
    $this -> saldo -= $quantia;
    }
    else {
        echo "Você não pode sacar um valor menor do que 0";
    }
}
public function exibirSaldo (){
    return "O seu saldo atual é " . $this -> saldo;
}
}
$conta = new ContaBancaria (1234, "Larissa", 100000);
$conta-> sacar(100);
$conta-> depositar(1000);
echo $conta-> exibirSaldo();