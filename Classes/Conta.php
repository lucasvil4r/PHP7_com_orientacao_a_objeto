<?php

include_once "interfaceConta.php";
//Mae
//Classe raiz
//Classe generica
//superclasse

abstract class Conta implements interfaceConta
{
    private $agencia;
    private $conta;
    private $titular;    
    protected $saldo = null;

    protected function setSaldo($valor)
    {
        if ($valor < 0 && $this->saldo <= $valor) {
            $this->saldo += $valor;
        }
    }

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
