<?php

require_once("config.php");

use Cliente\Cadastro; //Aqui estamos chamando o nosso namespace, ou seja é o nome do namespace e a classe que quermos acessar

$cad=new Cadastro();
$cad->setNome("Jesse");
$cad->setEmail("jesse@gmail.com");
$cad->setSenha("123");

//echo $cad;

$cad->registrarVenda();

?>