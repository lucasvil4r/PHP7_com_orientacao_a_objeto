<?php 

interface Conta {
    public function movimentar($valor);
    public function validar();
    public function verSaldo();
}