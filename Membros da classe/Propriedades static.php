<?php 

class Numeros 
{
    // declarando propiedade static 
    static public $par;

    //Não pode ser acessada diretamente pelos obj, tera que ser feita uma function para chamar elas
    //diff entre elas é herança
    protected $impar;
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
}

// acessando propriedade static
Numeros::$par = 25;

var_dump(Numeros::$par);