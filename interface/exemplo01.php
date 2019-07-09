<?php
//As interfaces servem para proteger o codigo, trabalhar em equipe e para apis
interface Veiculo{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
    
}

class Civic implements Veiculo{

    public function acelerar($velocidade){
        echo "O veiculo acelerou até: " . $velocidade;
    }
    public function frenar($velocidade){
        echo "O veiculo frenou até: " . $velocidade;
    }
    public function trocarMarcha($marcha){
        echo "O veiculo trocou de marcha em " . $marcha;
    }
}

$car=new Civic();
$car->trocarMarcha(1);

?>