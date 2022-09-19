<?php

//Classe especifica

include_once 'Conta.php';

class ContaCorrente extends Conta
{
    protected $limit = 1000;
    
    //overriding - sobrescrita

    protected function setSaldo($valor)
    {
        if  ($valor < 0 && $this->saldo >= -$valor-$this->limit) {
            $this->saldo += $valor;
        }
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }

    protected function taxa()
    {
        $this->saldo = $this->saldo - ($this->saldo * 0.03);
    }

    public function validar()
    {
        parent::validar(); // classe validar mae
        echo "Eu valido o limite<br>";
    }
}