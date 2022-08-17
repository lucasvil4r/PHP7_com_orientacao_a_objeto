<?php 

//constante são espaçoes na memoria "tipo variaveis" e conteudo não pode ser modificado.

//cria classe
class Numeros 
{
    const PI = 3.1426; // constante membro da classe
    //objetos da classes
    public $par;
    public $impar;
    public $primos;
    public $composto;
}

echo Numeros::PI; //chamando constantes
