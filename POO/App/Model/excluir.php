<?php

require_once 'ProdutoDAO.php';

$id = $_GET['id'];
$produto = new ProdutoDAO();
$produto->Deletar($id);
 
header("Location: ../index.php");

