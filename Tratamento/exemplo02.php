<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function trataNome($nome){
    if(!$nome){
        throw new Exception("Nenhum nome foi informado.", 1);
    }
    echo ucfirst($nome)."<br>";
}

try{
    trataNome("João");
    trataNome("");
}catch(Exception $e){
    echo $e->getMessage() ."<br>";
}finally{
    //Aqui também podemos passar um email avisando teve um erro
    echo "Executou o Try";
}

?>