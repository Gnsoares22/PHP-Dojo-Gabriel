<?php

//FUNÇÕES PARA MANIPULAÇÕES DE STRINGS

//strtoupper

$nome = "Gabriel";

//imprime nome em caracter minusculo
echo $nome . "<br>";
echo strtoupper($nome); //transforma o caracter minusculo em maiusculo
echo '<hr>';

//imprime nome em caracter minusculo
echo $nome . "<br>";
echo strtolower($nome); //transforma o caracter maiusculo em minusculo
echo '<hr>';

//retorna parte de uma string começa contar a partir do 3 caracter, lembrando que a contagem começa por zero
echo substr($nome, 5);
echo '<hr>';

//aumenta ou combina string
$objeto = "caneta";
echo $novoObjeto = str_pad($objeto,10, "///", STR_PAD_BOTH); //str_pad_both/left/right direção dos caracteres a serem adicionados
echo '<hr>';

//repete a string sucesso 5 vezes 
$string = " Sucesso ";
echo str_repeat($string, 5);
echo '<hr>';

//imprime o comprimento da string
echo strlen($string);
echo '<hr>';

//substitui uma string por outra
$texto = "I could love you";
echo str_replace("o", "xxxx", $texto);
echo '<hr>';

//retorna a posição inicial da palavra no texto
echo strpos($texto, "love");