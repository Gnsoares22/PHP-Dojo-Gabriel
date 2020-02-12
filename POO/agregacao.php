<?php

class Produtos{
    public $nome;
    public $valor;
    
    function __construct($nome,$valor) {
        
        $this->nome = $nome;
        $this->valor = $valor;
    }
    
}

 class Carrinho{
        public $produtos;
        
        public function adiciona(Produtos $produtos){
            $this->produtos[] = $produtos;
        }
        
        public function exibe(){
            foreach($this->produtos as $produtos){
               echo $produtos->nome. "<br>";
               echo $produtos->valor. "<hr>";
            }
        }
    }
    
    $produto1 = new Produtos("Computador","1500");
    $produto2 = new Produtos("Mouse","50");
    
    $carrinho = new Carrinho();
    $carrinho->adiciona($produto1);
    $carrinho->adiciona($produto2);
    
    $carrinho->exibe();