<?php
//Intens para exibir os erros
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 

spl_autoload_register(function($nameClass){
    var_dump($nameClass);
    $dirClass="class";
    $filename=str_replace("\\","/",$dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php");
    if(file_exists($filename)){
        require_once($filename);
    }
});

?>