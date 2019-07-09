<?php

class Documento{

    private $numero;

    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($numero){
        $this->numero=$numero;
    }

}
class CPF extends Documento{

    public function validaCPF():bool{
        $numero=$this->getNumero();      
        return true; 
    }
}

$doc= new CPF();
$doc->setNumero('1000');
echo $doc->validaCPF() ."<br/>";
echo $doc->getNumero();
?>