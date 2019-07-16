<?php

//Fazendo passagem por referência
$a=10;
function trocarValor(&$a){
    return $a+=50;
}

echo trocarValor($a) ."<br>";
echo trocarValor($a) ."<br>";


?>