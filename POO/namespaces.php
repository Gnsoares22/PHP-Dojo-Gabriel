<?php

require_once 'classes/produto.php';
require_once 'modelos/produto.php';

use classes\Produto; //chamando a classes Pessoa
use modelos\Produto as produtos; //chamando a classe Pessoa

$produto = new  Produto();
$produto->mostrarDetalhes();

echo "<hr>";

$produtinho = new produtos();
$produtinho->mostrarDetalhes();
