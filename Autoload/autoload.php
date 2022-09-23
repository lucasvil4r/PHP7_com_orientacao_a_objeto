<?php

function __autoload($class) // é chamada quando vc tenta instanciar uma class e não é encontrada
{
    include_once "./class/$class.php";
}

$obj = new Html();
$obj1 = new Myslq();

var_dump($obj);
var_dump($obj1);