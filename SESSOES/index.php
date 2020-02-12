<?php

//SESSOES
session_start();

//ARMAZENA INFORMAÇÕES QUE SERÃO UTILIZADOS EM OUTRAS PAGINAS
$_SESSION['cor'] = "Verde";
$_SESSION['carro'] = "Veloster";

echo $_SESSION['cor'].'<br>'. $_SESSION['carro'];

