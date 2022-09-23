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
    public $prod=[];

    public function __construct()
    {
        $this->prod = new Produto("bala", 25); // propria classe carrinho vai compor produto
    }
}

$car = new Carrinho();

echo "<pre>";
var_dump($car);
echo "<pre>";