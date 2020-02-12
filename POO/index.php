<?php

//criando uma classe -> é uma descrição que abstrai um conjunto de objetos com caracteristicas
//similares associados a vida real, ela é composta por atributos e metodos
//CLASSES TAMBEM SÃO OBJETOS DA VIDA REAL

class Pessoa{
    //atributos
    public $nome;
    public $idade;
    
    //metodos ações da classe
    public function Falar(){
        echo $this->nome . " de " .$this->idade . " Falouu <br>";
        //this acessa os atributos dentro da classe
    }
}

//instanciando a classe (invocando ela)
//variavel gabriel agora é uma variável
$gabriel = new Pessoa();
$gabriel->nome = "Gabriel Nascimento Soares";
$gabriel->idade = 23;
$gabriel->Falar();

class Login{
    
    //getters (pegar o valor setado) e setters (seta um valor ao atributo)
    private $email;
    private $senha;
    
    //metodo construtor  acessa as operações dentro dele no momento da instanciação (momento após o new)
    //para que a construção aconteça 
     public function __construct($email,$senha){
       
         $this->email = $email;
         $this->senha = $senha;
         $this->setEmail($email);
    }
    
    public function getEmail(){
    //vai pegar o email
    return $this->email;
  }
  
  public function setEmail($e){
      //vai setar o email
      $email = filter_var($e,FILTER_SANITIZE_EMAIL); //tirando caracteres desnecessarios do email
      $this->email = $email;
  }
  
  public function getSenha(){
    //vai pegar a senha
    return $this->senha;
  }
  
  public function setSenha($s){
      //vai setar o email
      $this->senha = $s;
  }
    
    public function Logar(){
        if($this->email == "teste@teste.com" and $this->senha == "123456"){
            echo "Logado com sucesso!";
        }else{
            echo "Dados inválidos";
        }
    }
}

echo "<hr>";

$logar = new Login("teste@teste.com","123456");
$logar->Logar();
echo "<br>";
