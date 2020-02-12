<?php

require_once 'conexao.php';

 $id = $_GET['id'];
 
//deletar dados
$sql = "DELETE FROM clientes WHERE cli_id = '$id'";
 
 if(mysqli_query($conexao,$sql)){
 
 header("Location: cadastrar.php");
 
 } 
