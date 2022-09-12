<?php 

class Numeros
{
    const NUMERO_PI = 3.1416;

    // declarando propiedade static 
    static public $par;
    static protected $impar;
    private $primos;

    public function setImpar($valor)
    {
        //$impar = $valor //forma incorreta de atribuir valores
        // $self aponta para a propria classe
        self::$impar = $valor;
    }

    public function getImpar()
    {
        //$impar = $valor //forma incorreta de atribuir valores
        // $this aponta para o obj
        return self::$impar;
    }

    public function teste()
    {
        echo "Eu sou metodo STATIC";
    }
}

// acessando propriedade static
Numeros::setImpar(35);
echo "<hr>";
echo Numeros::getImpar();
