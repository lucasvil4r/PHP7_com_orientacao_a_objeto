<?php

//cria classe
class Numeros 
{
    //objetos da classes
    public $par;
    public $impar;
    public $primos;
    public $composto;
}

// new contrutor de objetos
$contructClass = new Numeros;
echo "<pre>";
var_dump($contructClass);
echo "<pre>";

$um = new Numeros;
//atribuindo valor sobre objeto
$um->par = 1;

echo "<pre>";
var_dump($um);
echo "<pre>";
