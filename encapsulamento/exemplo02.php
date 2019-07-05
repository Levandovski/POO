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
class Programador extends Pessoa{
   
    public function verDados(){
     
        echo $this->nome."<br/>";
        echo $this->idade."<br/>";
        echo $this->senha."<br/>";
        echo "Classe Instanciada: ". get_class($this) . "<br/>";
        //get_class(NomeDoObjeto) //essa função mostra o nome da classe que esta sendo chamada
    }
}
$pr=new Programador();
$pr->verDados();


?>