<?php

class Mae 
{
    public function semSegredo()
    {
        echo "Todos podem saber";

    }

    protected function segredoFamiliar()// obj das classe pode acessar
    {
        echo "Segredo familiar";
    }

    private function meuSegredo()//somente metodos da classe pod acessar
    {
        echo "Somente eu sei";
    }

    /*
    public function contaTudo()
    {
        $this->segredoFamiliar();
        self::meuSegredo();
    }
    */
}

#########################################endregion

class Filha extends Mae 
{
    public function contaTudo()
    {
        $this->segredoFamiliar();
        //self::meuSegredo(); não pode ser acessada diretamente
    }
}

$pessoa1 = new Filha;
$pessoa1->contaTudo();
