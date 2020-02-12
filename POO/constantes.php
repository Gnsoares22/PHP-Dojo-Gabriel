<?php

//CONSTANTES

class Pessoa{
    //const ou define
    const nome = "Gabriel Nascimento Soares";
    
    public function exbirNome(){
        echo self::nome; //utiliza-se o self:: para exibrir a constante
        //dentro da classe
    }
}

class Janaina extends Pessoa{
    const nome = "Janaina Oliveira";
    
    //parent constante dentro da classe filha
    public function exibirNome(){
        echo parent::nome;
    }
}
 
$Janaina = new Janaina();
$Janaina->exibirNome();