<?php

//Classe especifica

include_once 'ContaPoupanca.php';

class ContaConjuntaPoupanca extends ContaPoupanca
{
    private $titular2;

    public function validar()
    {
        parent::validar();
        echo "valido titular3";
    }
}
