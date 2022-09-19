<?php

//Classe especifica

include_once 'ContaCorrente.php';

class ContaConjunta extends ContaCorrente
{
    private $titular2;

    public function validar()
    {
        parent::validar();
        echo "valido titular2";
    }
}
