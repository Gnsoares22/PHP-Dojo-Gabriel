<?php

//INTERFACE
//Quando uma classe implementa uma interface
//ela assina um contrato e nesse contrato ela é obrigatoriamente 
//obrigada a colocar todos os metodos que tem contigo na interface


interface Crud {
    public function create();
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud{
    
    public function create(){
        
    }
    public function read(){
        
    }
    public function update(){
        
    }
    public function delete(){
        
    }
}
