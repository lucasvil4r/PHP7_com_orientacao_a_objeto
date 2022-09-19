<?php

use MinhaData as GlobalMinhaData;

class MinhaData extends DateTime 
{
    function __toString()
    {
        return $this->format("d/m/y");
    }
}

$data = new MinhaData();

echo $data;

echo "<pre>";
var_dump($data);
echo "<pre>";