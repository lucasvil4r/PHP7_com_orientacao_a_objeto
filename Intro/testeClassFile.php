<?php

include 'class/file.php';

$file = new File('log.txt');
$file->writeFile("Escrever\n");

echo "<pre>";
var_dump($file);
echo "<pre>";

$file->excluir();
$file->ler();