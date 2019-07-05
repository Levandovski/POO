<?php

class Pessoa{
    public $nome="Rasmus Lerdorfi";
    protected $idade=48;
    private $senha="12345678";

    public function verDados(){
        echo $this->nome."<br/>";
        echo $this->idade."<br/>";
        echo $this->senha."<br/>";
    }
}
$ps=new Pessoa();
$ps->verDados();


?>