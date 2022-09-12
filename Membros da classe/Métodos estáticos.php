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
        // $this aponta para o obj
        $this->impar = $valor;
    }

    public function getImpar()
    {
        //$impar = $valor //forma incorreta de atribuir valores
        // $this aponta para o obj
        return $this->impar;
    }

    public function teste()
    {
        echo "Eu sou metodo STATIC";
    }
}

// acessando propriedade static
Numeros::teste();
$a->teste();