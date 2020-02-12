<?php

//Variaveis Suplerglobais

$x = 10;
$y = 15;

function soma(){
    
    echo $GLOBALS['x']+ $GLOBALS['y'];
}

soma();

echo '<hr>';

//Server INFORMAÇÕES DO SERVIDOR
echo $_SERVER['PHP_SELF'] . "<br>"; //caminho do arquivo em execução
echo $_SERVER['SERVER_NAME'] . "<br>"; //nome do server que está rodando o código
echo $_SERVER['SCRIPT_FILENAME'] . "<br>"; //caminho completo do arquivo
echo $_SERVER['DOCUMENT_ROOT'] . "<br>"; //caminho do arquivo em execução
echo $_SERVER['SERVER_PORT'] . "<br>"; //retorna porta do servidor
echo $_SERVER['SERVER_ADDR'] . "<br>"; //retorna o endereço remoto ou seja ip do servidor local


//POST E GET COLETAR DADOS DE FORMULÁRIOS
