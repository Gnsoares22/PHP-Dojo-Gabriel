<?php

Class Conexao {

    public static function conecta() {

        try {
            $db = new PDO("mysql:dbname=crudpoo;host=localhost", "root", "");
            return $db;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

}
