<?php

//TRATAMENTO DE EXCEÇÕES

class Noticiais{
    
    public function cadastrarEmail($email){
        
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            throw new Exception("Este email é inválido ", 1);
        } else {
            echo "Email cadastrado com sucesso";
        }
    }
}

$noticias = new Noticiais();

try{
$noticias->cadastrarEmail("jon@gmail.com");
}  catch (Exception $e){
    echo "Mensagem: " . $e->getMessage() . "<br>"; //trata exceção de erro exibindo a mensagem
    echo "Mensagem: " . $e->getCode() . "<br>";; //mostra erro codigo
    echo "Mensagem: " . $e->getLine() . "<br>";; //mostrar linha do erro
    echo "Mensagem: " . $e->getFile() . "<br>";;//mostra o arquivo onde está o erro
}