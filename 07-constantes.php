<?php
//Constantes define ou const
define("NOME", "Gabriel Nascimento Soares"); //define nome da variável constante e valor 
define("IDADE",23);
define("ALTURA",1.90);
define("CASADO",true);
define("TIMES",['vasco','flamengo','santos']); //array constante

const PI = 3.14;
echo PI . "<br>";
//var_dump(TIMES);

function exibeTimes(){
    
    var_dump(TIMES);
}

exibeTimes();