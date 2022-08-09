<?php

//cria classe
class Numeros 
{
    //objetos da classes
    // pode ser acessadas por qualuqer obj da classe
    public $par;

    //Não pode ser acessada diretamente pelos obj, tera que ser feita uma function para chamar elas
    //diff entre elas é herança
    protected $impar;
    private $primos;
}

//acess var public
$um = new Numeros();
$um->par = 1;

//acess var protected

echo "<pre>";
var_dump($um);
echo "<pre>";
