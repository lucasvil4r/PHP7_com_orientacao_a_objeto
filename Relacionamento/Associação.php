<?php

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

class Fornecedor 
{
    public $id;
    public $razaoSocial;
    public $telefone;
}

$for = new Fornecedor();
$for->id = 1;
$for->razaoSocial = "Brastemp";
$for->telefone = "2222-2222";

echo "<pre>";
var_dump($for);
echo "<pre>";

$prod = new Produto("Geladeira", 2566.00);
$prod->fornecedor = $for; // associou classe fornecedor

echo "<pre>";
var_dump($prod);
echo "<pre>";