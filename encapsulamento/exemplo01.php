<?php

class Pessoa{
    //Public - todos acessam
    //Protect - somente a classe Pai e as herdadas veem
    //Private - Somente a classe Pai vẽ
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