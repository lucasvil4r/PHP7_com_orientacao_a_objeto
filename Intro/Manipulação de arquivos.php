<?php

$file = 'createFopen.txt';
$returnFunction = fopen($file, 'a+'); // aponta para um arquivo e declara o modo, modo a+ cria um arquivo caso ele não ache
fwrite($returnFunction, "Teste function write fwrite\n"); //function fwrite escreve nele
fclose($returnFunction);

var_dump($returnFunction);

//caso queira ultilizar esse function no obj eu criaria uma classe com essas caracteristicas