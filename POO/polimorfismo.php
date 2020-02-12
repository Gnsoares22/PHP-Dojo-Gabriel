<?php

//POLIMORFISMO SUBSTITUIR OU REESCREVER UM METODO HERDADO DA
//CLASSE PAI DEFININDO DIVERSOS OUTROS COMPORTAMENTOS

class Animal{
    
    public function Andar(){
        echo "O animal andou";
   }
   
   public function Correr(){
       echo "Animal correu";
   }
}

class Cavalo extends Animal{
    
}

$animal = new Cavalo();
$animal->Andar();
