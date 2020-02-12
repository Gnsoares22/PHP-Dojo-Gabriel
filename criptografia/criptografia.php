<?php

//senha qualquer
$senha = "123456";

//criptografar senha usando base 64
$novasenha = base64_encode($senha);
echo "Base 64: ". $novasenha ." <br>";
echo "Sua senha é " . base64_decode($novasenha);

echo "<hr>";

//Outros tipos de criptografias
echo "Md5: " .md5($senha) . "<br>";
echo "Sha1: " .sha1($senha) . "<br>";

echo "<hr>";

//Criptografia senha segura usando hash
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
echo $senhaSegura;