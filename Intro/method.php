<?php

//cria classe
class Numeros 
{
    //objetos da classes
    public $par;
    public $impar;
    public $primos;
    public $composto;

    //metodo function de uma classe
    public function teste() 
    {
        return "Ola, sou function teste";
    }
}

$um = new Numeros;
//atribuindo valor sobre objeto
$um->par = 1;
echo $um->teste();

echo "<pre>";
var_dump($um);
echo "<pre>";
