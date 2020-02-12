<?php
/**** Tipos de dados escalares *****/

//string sequência de caracteres entre aspas
$nome = "Olá Mundo 1234";
var_dump($nome); //mostra informações sobre a variável
if(is_string($nome)){
    echo "É uma string"; //is_string verifica se é uma string
} else {
    echo "Não é uma string";
}

echo "<hr>";

//int variável com numero inteiro
$idade = 12;
var_dump($idade);
if(is_int($idade)): //is_int verifica se é um inteiro
    echo "É um inteiro";
else:
    echo "Não é um inteiro";
endif;

echo "<hr>";

//float variável com numero com ponto ex: 13.56
$altura = 1.98;
var_dump($altura);
if(is_float($altura)){ //is_float verifica se é float
    echo "É uma variável tipo float";
}else{
    echo "Não é uma variável tipo float";
}

echo "<hr>";

//boolean variável tipo false ou true, 0 ou 1, verdadeiro ou falso

$estou_vivo = true;
var_dump($estou_vivo); 
if(is_bool($estou_vivo)){ //is_bool verifica se é booleando
    echo "É booleano";
}else {
    echo "Não é booleano";
}

//bool, int, float, string

echo "<hr>";

/***************  Tipos de dados compostos  **************/

//array é uma lista/vetor is_array() verifica se é uma lista
$carro = array("HB20","GOL","UNO","CAMARO",12,true,14.5);
var_dump($carro);

echo "<hr>";

//Variavel tipo Object
class Cliente {
  public $nome;
  public function atribuirNome($nome){
      $this->$nome = $nome; //funcão para atribuir nome
  }
}

$cliente = new Cliente(); //instanciar a classe
$cliente->atribuirNome("Gabriel");
var_dump($cliente);
if(is_object($cliente)){ //is_bool verifica se é booleando
    echo "É um Objeto";
}else {
    echo "Não é um objeto";
}

echo "<hr>";

/******* ESPECIAIS *******/
//NULL -> variável sem valor
$casa = null;
var_dump($casa); //is_null() verifica se a variável é nula
