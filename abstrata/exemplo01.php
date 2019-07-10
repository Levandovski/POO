<?php
//As interfaces servem para proteger o codigo, trabalhar em equipe e para apis
interface Veiculo{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
    
}
interface Aeronaves{
    public function voar($velocidade);
}

abstract class Automovel implements Veiculo, Aeronaves{

    public function acelerar($velocidade){
        echo "O veiculo acelerou até: " . $velocidade;
    }
    public function frenar($velocidade){
        echo "O veiculo frenou até: " . $velocidade;
    }
    public function trocarMarcha($marcha){
        echo "O veiculo trocou de marcha em " . $marcha;
    }
    public function voar($velocidade){
        echo "Estou voando a: " . $velocidade;
    }
}
class DelRey extends Automovel{

    public function empurrar(){

    }

}
//Classes abstratas são os métodos definidos na interface, é uma forma de já deixarmos este métodos prontos, uma class pode ter varias interfaces.
$car= new DelRey();
$car->acelerar(10);
$car->voar(10);

?>