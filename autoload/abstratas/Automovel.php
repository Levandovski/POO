<?php

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

?>