<?php 

//organiza pagina para não colidir os nomes de classes

namespace Aluno;

class Teste
{
    function __construct()
    {
        echo "Estou na namespace aluno<br>";
    }
}

// divida file para nã haver conflitos
namespace Professor;

class Teste
{
    function __construct()
    {
        echo "Estou na namespace professor<br>";
    }
}