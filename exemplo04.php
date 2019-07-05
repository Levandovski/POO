<?php

class Endereco{
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a,$b,$c){
        $this->logradouro=$a;
        $this->numero=$b;
        $this->cidade=$c;
    }
    public function __destruct(){
        //método chamado sempre ao final da execução do script da pagina para tirar o objeto da memória
        var_dump("Destruíndo objeto");
    }
    public function __toString(){
        //Esse método é serializar o código, ou seja, quando chamamos um echo ele converterá os dados abaixo para string e exibira essa formatação
        return "Logradouro: ".$this->logradouro." - Numero: ".$this->numero." - Cidade: ".$this->cidade."</br>";
    }
}

$end=new Endereco("Rua Joanópolis","134","Curitiba");
//var_dump($end);

//Essa forma estou forçando a memória ser liberada pelo __destruct
//unset($end);

//Aqui está sendo chamado o __toString
echo "<h1>$end</h1>";

?>