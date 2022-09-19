<?php

include_once 'ContaCorrente.php';


$cc = new ContaCorrente();
$cc->validar();

echo "<pre>";
var_dump($cc);
echo "<pre>";