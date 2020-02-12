<?php

$numero = 11;

//if condicional 
if($numero == 15){
    echo "É igual a 10";
}elseif ($numero > 10){
    echo "É maior que 10";
}else{
    echo "Não é igual a 10";
}

echo "<hr>";

$media = 5.5;

echo ($media >=7) ? "Aprovado!" : "Reprovado!"; //operador ternário

echo "<hr>";

//SWITCH-CASE Escolha caso
$cor = "Amarelo";

switch ($cor){
    case "Vermelho":
        echo "Cor vermelho forte";
     break;
    case "Verde":
        echo "Cor verde mato";
     break;
    default:
        echo "Cor Indefinida";
     break;
}