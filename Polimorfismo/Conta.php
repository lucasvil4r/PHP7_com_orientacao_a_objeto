<?php

//Mae
//Classe raiz
//Classe generica
//superclasse

abstract class Conta
{
    private $agencia;
    private $conta;
    private $titular;    
    protected $saldo = null;

    abstract protected function setSaldo($valor);
    abstract protected function taxa();

    protected function getSaldo($valor)
    {
        return $this->saldo;
    }

    public function movimentar($valor)
    {
        $this->setSaldo($valor);
    }

    public function validar()
    {
        echo "Eu valido o agencia, conta, titular e saldo<br>";
    }
}
