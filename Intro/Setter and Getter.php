<?php

//cria classe
class Numeros 
{
    //objetos da classes
    // pode ser acessadas por qualuqer obj da classe
    public $par;

    //Não pode ser acessada diretamente pelos obj, tera que ser feita uma function para chamar elas
    //diff entre elas é herança
    protected $impar;
    private $primos;

    public function setImpar($valor)
    {
        //$impar = $valor //forma incorreta de atribuir valores

        // $this aponta para o obj
        if ($valor % 2 == 0) {
            $this->impar = $valor;
        }
    }

    public function getImpar()
    {
        //$impar = $valor //forma incorreta de atribuir valores
        // $this aponta para o obj
        return $this->impar;
    }
}

//acess var public
$um = new Numeros();

//Proibido na OOP apenas dentro de metodos ou functions para isso protegemos a var 
//$value = 4;
//if ($value % 2 == 0) {
//    $um->par = $value;
//}
//Proibido na OOP apenas dentro de metodos ou functions para isso protegemos a var 

//atribuindo valor sobre uma var protected atravez de uma function
$um->setImpar(20);

echo "<pre>";
var_dump($um);
echo "<pre>";

// chamando function que exibira valor sobre uma var protected
echo $um->getImpar();
