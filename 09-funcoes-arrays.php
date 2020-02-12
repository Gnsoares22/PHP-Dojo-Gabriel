<?php

//is_array() verifica se a variavel é uma lista/array

$nomes = ["Max","Sandra","Fabio","José","Maria"];
$carros = ["Camaro","Uno","Gol"];

//in_array
echo in_array("Maria", $nomes); //verifica se o valor contem no array
//Maria (valor),$nome (array) se tiver dentro do array retorna 1 (verdadeiro)
//se nao existir não retorna nada

echo "<hr>";

//arays keys torna os indices do array $nomes em um novo array
$keys = array_keys($nomes);
print_r($keys);

echo "<hr>";

//array values retorna um novo array com os valores do array passado
$values = array_values($nomes);
print_r($nomes);

echo "<hr>";

//array merge une dois arrays em um só 
$pes_carros = array_merge($nomes,$carros);
print_r($pes_carros);

echo "<hr>";

//array pop exclui a ultima posição do array
echo array_pop($pes_carros);

echo "<hr>";

//array shift exclui a primeira posição do array
echo array_shift($pes_carros);

echo "<hr>";

//array unshif adiciona um ou mais elementos no começo do array
$frutas = array("Maçã","Pera","Mamão","Acerola");
print_r($frutas);
echo "<hr>";
array_unshift($frutas, "Banana","Uva");
print_r($frutas);
echo "<hr>";

//array push adiciona elementos no final do array
array_push($frutas, "Jaca","Pera");
print_r($frutas);

echo "<hr>";

$posicoes = ["Campeão","Vice","Terceiro"]; //indice
$values = ["Santos","Corinthians","Palmeiras"]; //valor de cada indice

//array combine combina dois arrays
$times = array_combine($posicoes, $values);
print_r($times);

echo "<hr>";

//array sum calcula elementos do array
$soma = [5,6,7,10];
$total = array_sum($soma);
echo $total;

echo "<hr>";

//explode transforma uma string em um array
$data = "30/02/2020";
$novadata = explode('/', $data);
print_r($novadata);
echo "<hr>";
$frase = "Meu nome não é john";
$array = explode(" ", $frase);
print_r($array);

echo "<hr>";

//implode transforma array numa string
$frutas = array("Maçã","Pera","Mamão","Acerola");

echo $string = implode(",", $frutas);
