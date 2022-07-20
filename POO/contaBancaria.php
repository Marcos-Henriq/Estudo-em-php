<?php
class contaBancaria{
    private $nome;
    private $nomeTitular;
    private $numeroAgencia;
    private $numeroConta;
    private $saldo;

    // this basicamente volta a raiz da classe

// Método construtor = serve para
    public function __construct($nome,$nomeTitular,$numeroAgencia,$numeroConta,$saldo){
        $this->nome = $nome;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }
    // criando um método publico
    public function obterSaldo(){
        return $this->saldo;

    }
    public function depositar($valor){
        $this->saldo += $valor;
        return 'deposito de : '.$valor;
    }
    public function saque($valor){
        $this->saldo -= $valor;
        return 'saque de : '.$valor;
    }
}


$nuBank = new contaBancaria(
    'Nu Bank',
    'Marcos',
    '10022',
    '121323232332112',
    11000.00
);

echo($nuBank->obterSaldo());

$nuBank->depositar(300.00);
$nuBank->saque(100.00);

