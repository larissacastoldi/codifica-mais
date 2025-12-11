<?php
class ContaBancaria {
    protected string $numeroDaConta;
    protected string $nomeDoTitular;
    protected float $saldo;

public function __construct (
    string $nomeDoTitular,
    float $saldo = 0
    )
{
    $this->nomeDoTitular = $nomeDoTitular;
    $this->saldo = $saldo;
}
public function depositar ($quantia){
    if ($quantia <= 0) {
    echo"Você não pode depositar um valor menor do que 0\n";
    return;
    }

    $this->saldo += $quantia;
}

public function sacar ($quantia){
    if ($quantia < 0){
        echo "Você não pode sacar um valor menor do que 0";
        return;
    }

    if ($quantia > $this->saldo){
       echo "Você não tem esse valor \nVocê tem {$this->saldo}\n";
        return;
    }
   
    $this -> saldo -= $quantia;
    
}
public function exibirNumeroDaConta() {
    echo "{$this->numeroDaConta}";
}

public function exibirSaldo() {
    echo "O saldo atual na conta do titular {$this->nomeDoTitular} é R$ {$this -> saldo}\n";
}}
//------------------------------------------------------------------------------

class ContaCorrente extends ContaBancaria {
    private const TAXA_SAQUE = 3.50;
    private const TAXA_TRANSFERENCIA = 1.50;

    public function __construct(string $nomeDoTitular, float $saldo = 0)
    {
        parent::__construct($nomeDoTitular, $saldo);
        $this->numeroDaConta = self::gerarNumeroDaConta();
    }

    public static function gerarNumeroDaConta(){
        $numero = str_pad (rand(0,99999999),8,"0", STR_PAD_LEFT);
        $digito = rand(0,9);
        return "$numero-$digito";
    }

    public function exibirNumeroDaConta() {
    echo "$this->numeroDaConta";
    }

    public function sacar ($quantia){
        $saqueComTaxa= $quantia + self::TAXA_SAQUE;
        if ($saqueComTaxa <= 0 ){
            echo "Você não pode sacar um valor menor do que 0";
            return;
        }

        if ($saqueComTaxa > $this->saldo){
            echo "Você não tem esse valor {$this->NomeDoTitular} \n Você tem {$this->saldo}\n";
            return;
        }
        
        $this->saldo -= $saqueComTaxa;
        echo "Seu saque foi concluído {$this->nomeDoTitular}!\n";
    }

    public function transferir($contaDestino, $valor) {
        $valorTranferir = $valor + self::TAXA_TRANSFERENCIA;
        if ($valorTranferir > $this->saldo){
            echo "Saldo insuficiente, transferência interrompida, {$this->nomeDoTitular}! \n";
            return;
        }
        $this->saldo -= $valorTranferir;
        $contaDestino->depositar($valor);
        echo "Transferência de R$ {$valor} realizada com sucesso, {$this->nomeDoTitular}! \n";
    }

    public function exibirSaldo (){
        echo "O saldo atual na conta do titular {$this->nomeDoTitular} é R$ {$this -> saldo}\n";
    }
  }

// $conta1 = new ContaCorrente("Larissa", 1000);
// $conta2 = new ContaCorrente("Ilmara", 300);
// $conta3 = new ContaCorrente("Eduardo",5000);

// echo"\n\n";
// $conta1->exibirSaldo();
// $conta2->exibirSaldo();
// $conta3->exibirSaldo();

// echo "\n\n";
// $conta1->sacar(100);
// $conta3->sacar(2000);

// echo "\n";
// $conta1->exibirSaldo();
// $conta3->exibirSaldo();

// echo "\n\n";
// $conta1->transferir($conta2, 500);
// $conta3->transferir($conta1,4000);

// echo"\n\n";
// $conta1->exibirSaldo();
// $conta2->exibirSaldo();
// $conta3->exibirSaldo();

//-------------------------------------------------

class ContaPoupanca extends ContaBancaria {
    protected $porcentagemRendimento = 0.1 ;//1% ao mês

    public function __construct(string $nomeDoTitular, float $saldo = 0)
    {
        parent::__construct($nomeDoTitular, $saldo);
        $this->numeroDaConta = self::gerarNumeroDaConta();
    }

    public static function gerarNumeroDaConta(){
        $numero = str_pad (rand(0,999999),6,"0", STR_PAD_LEFT);
        $digito = rand(0,9);
        return "$numero-$digito";
    }

    public function exibirPorcentagemRendimento (){
        echo "A porcentagem do rendimento atual é {$this->porcentagemRendimento}";
        return;
    }

    public function porcentagemRendimento($novoValor){
        if($novoValor <= 0) {
            echo "Valor inválido, a porcentagem tem que ser maior do que 0";
            return;
        }
        $this->porcentagemRendimento = $novoValor;
    }

    public function aplicarRendimento(){
        $rendimentoAplicado = $this->saldo * $this->porcentagemRendimento;
        $this->saldo += $rendimentoAplicado;
    }

    public function exibirNumeroDaConta() {
    echo "$this->numeroDaConta";
    }

    public function exibirSaldo (){
        echo "O saldo atual na conta do titular {$this->nomeDoTitular} é R$ {$this -> saldo}\n";
    }

  }
//---------------------------------------------------
echo "\n";

$contaCorrente1 = new ContaCorrente("Larissa", 1000);
$contaPoupanca1 = new ContaPoupanca("Eduardo", 500);

// contas com valores negativos para testar o erro
$contaCorrente2 = new ContaCorrente("Ilmara", -50);
$contaPoupanca2 = new ContaPoupanca("Gabriel", -100);

echo"---------- exibindo número da conta ------------\n\n";
echo "Conta Corrente Larissa: "; $contaCorrente1->exibirNumeroDaConta(); echo "\n";
echo "Conta Poupança Eduardo: "; $contaPoupanca1->exibirNumeroDaConta(); echo "\n";
echo "Conta Corrente Ilmara: "; $contaCorrente2->exibirNumeroDaConta(); echo "\n";
echo "Conta Poupança Gabriel: "; $contaPoupanca2->exibirNumeroDaConta(); echo "\n\n\n";

echo "------------ saldo atual antes de depositar --------------\n\n";
$contaPoupanca1->exibirSaldo(); echo "\n\n";

echo"------------ saldo depois de depositar 200 reais ------------\n\n";
$contaPoupanca1->depositar(200);
$contaPoupanca1->exibirSaldo();echo "\n\n";

echo"------------- saldo depois de sacar 100 reais ------------\n\n";
$contaPoupanca1->sacar(100);
$contaPoupanca1->exibirSaldo();echo "\n\n";

echo "--------- saldo atual antes de depositar ----------\n\n";
$contaCorrente1->exibirSaldo(); echo "\n\n";

echo"----------- saldo depois de sacar 100 reais ----------\n\n";
$contaCorrente1->sacar(100);
$contaCorrente1->exibirSaldo();echo "\n\n";

echo"--------- saldo depois de tranferir da conta Corrente para a conta Poupança -----------\n\n";
$contaCorrente1->transferir($contaPoupanca1, 200);echo "\n";

$contaCorrente1->exibirSaldo();
$contaPoupanca1->exibirSaldo();echo "\n\n";

echo"--------- valor com rendimento aplicado na conta poupança em 20% --------- \n";
$contaPoupanca1->porcentagemRendimento(0.20);echo "\n";

$contaPoupanca1->aplicarRendimento();

$contaPoupanca1->exibirSaldo();echo "\n";
