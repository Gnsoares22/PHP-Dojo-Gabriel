<?php

$nome = "Gabriel Nascimento Soares";
$a = 1;
$b = 3;
$c = 7;

function exibeNome(){ //função que exibe o nome
    global $nome; //varivel dentro do escopo da função
    echo $nome;
}

exibeNome(); //retorna a função
echo "<hr>";
////////////////////////////////

function exibeCidade(){
    global $cidade;
    $cidade = "Rio de Janeiro";
}

exibeCidade();
echo $cidade;
echo "<hr>";

////////////////////

function soma(){
    
    //global $a,$b,$c; 1 forma
   echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c']; //array de variaveis globais

}

soma();