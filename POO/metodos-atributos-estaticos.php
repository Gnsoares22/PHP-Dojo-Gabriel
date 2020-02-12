<?php

class Login {
    
    public static $user;
    
    public static function verificaLogin(){
        echo "O usuário " .self::$user. " está logado";
    }

}

//com atributo estático não preciso referenciar a classe basta colocar o nome dela
//usar :: (nome do metodo)
//ACESSAR OS METODOS SEM A NECESSIDADE DE INSTANCIAR
Login::$user = "admin";
Login::verificaLogin();

//para imprimir atributos estaticos usa-se o self

