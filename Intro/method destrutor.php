<?php

//cria classe
class Numeros 
{
    //objetos da classes
    public $par;
    public $impar;
    public $primos;
    public $composto;

    //method contrutor
    //public function Numeros() <- desapropriado php 7
    public function __construct($param) // forma correta method contruct
    {
        echo "Ola, sou method Contruct, paramero passado foi $param";
    }

    public function __destruct()
    {
        echo "Disconnect";
    }

    //metodo function de uma classe
    public function teste() 
    {
        return "Ola, sou function teste";
    }
}

$um = new Numeros(23);

echo "<pre>";
var_dump($um);
echo "<pre>";

//libera memoria na ultima linha destruct é chamado auto