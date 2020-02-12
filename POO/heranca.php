<?php

Class Veiculo{
    
    private $modelo;
    public $cor;
    public $ano;
    
    public function Andar(){
        echo "Andou";
    }
    
    public function Parar(){
        echo "Parou";
    }
    
    //getters e setters
    
    public function getModelo(){
        
        return $this->modelo;
    }
    
    public function setModelo($m){
        
        $this->modelo = $m;
    }
    
}

//Herança extends classe filha carro e moto herda o atributo da classe pai Veiculo, pois ambos SÃO Veiculos
class Carro extends Veiculo{
  
    public function LigarLimpador(){
        echo "Limpador Ligado";
    }
}

class Moto extends Veiculo{
   public function darGrau(){
       echo "Dando grauuu em 321";
   }
}

//Modificadores de acesso (ENCAPSULAMENTO) PROCESSO PARA PROTEGER METODOS E ATRIBUTOS
//GARANTE SEGURANÇA E EVITA USUÁRIOS DE MODIFICAR CAMPOS PROTEGIDOS

//public -> consigo acessar os atributos e metodos da classe fora do escopo da classe e dentro do escopo
//da mesma tambem

//protected -> protege o atributo sendo permitido acessar o atributo somente dentro da própria classe
///ou dentro da classe filha (herança)
//porem com getters e setters eu posso acessar ele fora da classe normalmente

//private -> Só é possivel acessar metodos e atributos dentro da propria classe somente dentro da propria
//classe / Nem na classe filha é possivel acessar

