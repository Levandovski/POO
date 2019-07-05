<?php

class Pessoa{
    public $nome;//Atributo

    public function falar(){//método
        return "Olá meu nome é: " . $this->nome;
    }
}
$glaucio=new Pessoa();
$glaucio->nome="Jessé";
echo $glaucio->falar();

?>