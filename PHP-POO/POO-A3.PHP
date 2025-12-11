<?php
class Funcionario {
    private string $nome;
    private string $cargo;
    private float $salario;

public function __construct (
    string $nome,
    string $cargo,
    float $salario
    )
{
    $this -> nome = $nome;
    $this -> cargo = $cargo;
    $this -> salario = $salario;
}
public function alterarCargo ($novoCargo){
    $this -> cargo = $novoCargo;
    }

public function alterarSalario ($novoSalario){
    if ($novoSalario < 0){
       echo "Você não pode definir esse valor de salário";
    }
    else { $this -> salario = $novoSalario;
}
}
public function exibirDetalhes (){
    return "DETALHES DO FUNCIONARIO " . "\n" . "Nome: " . $this -> nome . "\n" . "Cargo: " . $this -> cargo . "\n" . "Salário: R$ " . $this -> salario;
}
}
$funcionario = new Funcionario ("Larissa Foresti Castoldi", "Assistente Administrativo", 2500.00);
$funcionario-> alterarCargo("Programadora");
$funcionario-> alterarSalario(3000.00);
echo $funcionario-> exibirDetalhes();