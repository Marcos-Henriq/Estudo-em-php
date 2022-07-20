<?php


class venda
{



    private $data;
    private $produto;
    private $quantidade;
    private $valorTotal;

    public function __construct($data,$produto,$quantidade,$valorTotal){
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
    }

    public function notaFiscal(){
        return 'Compra realiazada no dia: '.$this->data.'Produto: '.$this->produto.'Quantidade: '.$this->quantidade.'Valor Total da Venda: '.$this->valorTotal;
    }
}


// instancia de classe;

$bolaBasquete = new venda(
    '04-07-2022',
    'Bola de Basquete - Spalding',
    2,
    150.00
);

echo ($bolaBasquete->notaFiscal());