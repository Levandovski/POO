<?php

abstract class Animal{

    public function falar(){
        return "Som";        
    }
    public function mover(){
        return "Anda";
    }

}

class Cachorro extends Animal{
    public function falar(){
        return "Late";
    }
}
class Gato extends Animal{
    public function falar(){
        return "Mia";
    }
}
class Passaro extends Animal{
    public function falar(){
        return 'Pia';
    }
    public function mover(){
        return 'Voa'.' e '. parent::mover();//Estamos instanciando a classe pai como static e acessando o método original dela
    }
}

$c= new Cachorro();
echo $c->falar() . "<br/>";
echo $c->mover() . "<br/>";

echo "----------------------------<br/>";

$g= new Gato();
echo $g->falar() . "<br/>";
echo $g->mover() . "<br/>";

echo "----------------------------<br/>";

$g= new Passaro();
echo $g->falar() . "<br/>";
echo $g->mover() . "<br/>";

?>