<?php 
Class Carro{

 private $nome;

 private $cor;

 private $data_de_fabricacao;

 private $modelo;

 function ligar(){
    echo"Carro Ligado!";

 }
 function desligar(){  
    echo "Carro Desligado!";

}

function get_cor(){ 
    return $this->cor;

}

function set_cor($cor) {

    $this->cor = $cor;

}

function set_data_de_fabricacao($data_de_fabricacao) { 
    $this->data_de_fabricacao = $data_de_fabricacao;
}

function get_data_de_fabricacao(){ 
    return $this->data_de_fabricacao;
}

function set_modelo($modelo) {
    $this->modelo = $modelo;
}

function get_modelo() {
    return $this->modelo;
}

function set_nome($nome) {
    $this->nome = $nome;

}

function get_nome() {
    return $this->nome;
}

}

$novo_carro = new Carro();

$novo_carro->set_cor("Azul");

$novo_carro->set_data_de_fabricacao("10/12/2000");

$novo_carro->set_modelo("2000");







?>