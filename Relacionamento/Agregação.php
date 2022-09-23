<?php

use Produto as GlobalProduto;

class Produto 
{
    public $nome;
    public $valor;
    public $fornecedor;

    function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho 
{
    protected $itens=[];

    public function InsereProduto(Produto $item)
    {
        $this->itens[] = $item; // vai manter todos os produtos reunidos em um array
    }
}

$prod = new Produto("Geladeira", 123.00);
$prod1 = new Produto("Geladeira", 123.00);

$car = new Carrinho();
$car->InsereProduto($prod);
$car->InsereProduto($prod1);
$car->InsereProduto($prod2 = new Produto("Geladeira", 123.00));

echo "<pre>";
var_dump($car);
echo "<pre>";