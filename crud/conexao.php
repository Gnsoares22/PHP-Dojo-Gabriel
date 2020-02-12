<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "crud";

$conexao = mysqli_connect($host, $user, $password, $db);

if(mysqli_connect_error($conexao)){
    
    echo "Erro ao conectar na base de dados";
    
}

