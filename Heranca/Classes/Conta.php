<?php

//Mae
//Classe raiz
//Classe generica

class Conta 
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
