<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function ola($periodo, $texto = "mundo"){
    return "Olá $texto, $periodo <br>";
}
//Sempre devemos deixar os parametros obrigatórios a esquerda
//Ja os parametros com default devem ficar a direita
echo ola("Teste");

?>