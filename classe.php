<?php 

Class Caneta{
    var $cor;
    var $marca;
    var $tipo;
    var $tampado = true;


    function escrever(){
        if($this->tampado == true){
        }else{
        echo"<i style = 'color:this->cor'>escrevendo na cor</i> ";
    }
}
    function abrir_tampa(){
        if($this->tampado == true){
            $this->tampado = false;
        }
    }

}

class Estoque{
    var $item;

    function add_item(){
     
    }

    function remove_item(){

    }
}

$manoel_pen = new Caneta();
$gomes_pen = new Caneta();

$manoel_pen->cor="Red";
$manoel_pen->marca= "Bic";
$manoel_pen->tipo= "Esfereográfica";

$gomes_pen->cor= "Red";
$gomes_pen->tipo= "Faercastel";
$gomes_pen->tipo= "marcador";

$manoel_pen->abrir_tampa();
$manoel_pen->escrever();
?>