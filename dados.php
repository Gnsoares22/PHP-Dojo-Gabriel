<?php

//$_POST E $_GET 
//POST ENVIA DADOS DE FORMA PROTEGIDA ENCAPSULADA E GET ENVIA PELA URL 
 $nome = $_POST['nome']; //pega o name do input (name=nome)
 $email = $_POST['email']; //pega o email do input (name=email)

 echo "Seu nome é $nome e seu email é $email <br><br>";
 
 // var_dump($_POST);
