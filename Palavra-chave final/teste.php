<?php

include_once 'ContaConjuntaPoupanca.php';

$cc = new ContaConjuntaPoupanca();
$cc->validar();

echo "<pre>";
var_dump($cc);
echo "<pre>";
