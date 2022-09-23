<?php 

$a = 5;
$b = $a; // atribuição por valor
$a = 7;


class teste 
{
    public $valor;

}

$c = new teste;
$c->valor = 15;

$d = clone $c; // referencia
$d->valor = 689;

echo "<pre>";
echo var_dump($c);
echo "<pre>";

echo "<pre>";
echo var_dump($d);
echo "<pre>";