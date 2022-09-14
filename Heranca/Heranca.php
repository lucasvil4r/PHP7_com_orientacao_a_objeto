<?php

class Pessoa 
{
    public $nome;
    protected $sexo;
    private $idade;
    private $cpf;
}

$pessoa1 = new Pessoa;
var_dump($pessoa1);

##################################

class Aluno extends Pessoa ////herda os atributos da classe Pessoa

{
    public $curso;
}

$aluno1 = new Aluno();
var_dump($aluno1);

###############################endregion

class Professor extends Pessoa //herda os atributos da classe Pessoa
{
    public $materias;
}

$aluno1 = new Aluno();
var_dump($aluno1);