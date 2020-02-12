<?php

//adição +
//Subtração -
//Mutiplicação *
//Divisão /
//Modulo % (resto da divisão)
//Potencia **

$a = 5;
$b = 2;

$soma = $a + $b;
$subtracao = $a - $b;

echo "Soma: " . $soma; //5+2 = 7
echo "<hr>";

echo "Subtração: " . $subtracao; //5-2 = 3
echo "<hr>";

echo "Multiplicação: " . $a*$b; //5*2 = 10
echo "<hr>";

echo "Divisão: " . $a/$b; //5/2 = 2.5
echo "<hr>";

echo "Resto: " . $a%$b; //5%2 = 1
echo "<hr>";

echo "Potencia: " . 5**2; //5^2 = 25
echo "<hr>";

echo "Média: " . ($a+$b)/2; //() define a prioridade da operação
echo "<hr>";

//forma reduzida soma $a+=$b / subtracao $a-=$b / Multiplicacao $a*=$b / Divisão $a/=$b

//OPERADORES INCREMENTO E DECREMENTO

$numero = 20;
echo ++$numero; //ascrecenta +1 a variavel numero pre incremento
echo "<br>";
echo $numero++ . "<br>"; //pos incremento encrementa apos o numero ser impresso 
echo $numero; 

echo "<hr>";

$numero = 40;
echo --$numero; //decrementa -1 a variavel numero pre incremento
echo "<br>";
echo $numero-- . "<br>"; //pos incremento decremento apos o numero ser impresso 
echo $numero; 

echo "<hr>";

//Operadores de comparação

// == igual
//!= ou <> diferente
// === operador de idenficação tem que ser numeros iguais e com o mesmo tipo ex: 5 == 5 
//numeros iguais e do mesmo tipo (inteiro)

$a = 3;
$b = 3;

if($a === $b){
    echo "Positivo";
}else{
    echo "Negativo";
}

// > maior
// < menor
// >= maior igual
// <= menor igual


//OPERADORES LÓGICOS

// && and (e) retorna verdadeiro se as duas expressoes forem verdadeiras
// || or (ou) retorna verdadeiro se uma expressao ou outra for verdadeira
// ! negação
// xor ou é um ou é outra expressão