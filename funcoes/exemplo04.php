<?php

//Agora vamos passar varios parametros sem declarar eles na função, por meio de uma função pronta


function meusParametros(){

    $argumentos= func_get_args();
    return $argumentos;
}

var_dump(meusParametros("Jesse",22,"Casado"));


?>