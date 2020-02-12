<?php

require_once 'Produto.php';
require_once 'Conexao.php';

class ProdutoDAO{

public function Criar(Produto $p){
    
    $sql = 'INSERT INTO produto (nome,descricao) VALUES (?,?)';
    
    //metodo prepare PDO
    $stmt = Conexao::conecta()->prepare($sql);
    $stmt->bindValue(1,$p->getNome());
    $stmt->bindValue(2,$p->getDescricao());
    $stmt->execute(); //executa tudo
}

public function Ler(){
    
    $sql = 'SELECT * FROM produto';
    $stmt = Conexao::conecta()->prepare($sql);
    $stmt->execute();
    
    if($stmt->rowCount() > 0){
        $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
    } else {
        return [];
    }
}

public function selecionaId($id){
    
    $resultado = array();
    $sql = "SELECT * FROM produto WHERE id = ?";
    $stmt = Conexao::conecta()->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->execute();
    $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
    return $resultado;
   
}

public function Update(Produto $p){
    
    $sql = 'UPDATE produto SET nome = ?, descricao = ? WHERE id = ?';
    $stmt = Conexao::conecta()->prepare($sql);
    $stmt->bindValue(1, $p->getNome());
    $stmt->bindValue(2, $p->getDescricao());
    $stmt->bindValue(3, $p->getId());
    $stmt->execute();
    
    
}

public function Deletar($id){
    
    $sql = "DELETE FROM produto WHERE id = ?";
    $stmt = Conexao::conecta()->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->execute();
    
}

}