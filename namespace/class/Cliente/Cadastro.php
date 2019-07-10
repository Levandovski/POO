<?php

namespace Cliente; //Poderia ser outro nome, mas por padrão é melhor deixar o mesmo nome da classe

class Cadastro extends \Cadastro{
    
    public function registrarVenda(){
        echo "Um nova venda foi registrada! " . $this->getNome();
    }
}

?>