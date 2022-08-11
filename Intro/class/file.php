<?php
class File
{
    protected $file;
    protected $recurso;

    //function bottom verificar se arquivo existe
    public function __construct($file)
    {
        $this->file = $file;
        if (!file_exists($file)) {
            $this->openFile('w+');
            $this->closeFile();
        }
    }

    //function bottom add outro parametro da function fopen "recurso"
    protected function openFile($modo)
    {
        $this->recurso = fopen($this->file, $modo);
    }

    //essa function fecha arquivo
    protected function closeFile()
    {
        fclose($this->recurso);
    }
    
    //method escreve texto no arquivo
    public function writeFile($txt)
    {
        $this->openFile('a+');
        fwrite($this->recurso, $txt);
        $this->closeFile();
    }

    //method escreve texto no arquivo na tela
    public function ler()
    {
        return file_get_contents($this->file);
    }

    //method renomeia e muda arquivo de lugar
    public function mover($name)
    {
        rename($this->file, $name);
        $this->file = $name;
    }

    //method excluir
    public function excluir()
    {
        unlink($this->file);
    }

    public function __destruct()
    {

    }

}
//cada função deve realizar apenas uma tarefa isso é chamado de responsabilidade unica "boa pratica"