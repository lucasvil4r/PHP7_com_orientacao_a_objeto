<?php

use Numeros as GlobalNumeros;

class Numeros
{
    static public $cont;
    private $primos;

    function __construct($value)
    {
        $this->primos = $value;
        self::$cont++;
    }

}

$a = new Numeros(15);
var_dump($a);
echo Numeros::$cont;

echo "<hr>";

$b = new Numeros(15);
var_dump($b);
echo Numeros::$cont;

echo "<hr>";

$c = new Numeros(15);
var_dump($c);
echo Numeros::$cont;
echo "<hr>";