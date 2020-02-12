<html>
    <head>
        <meta charset="utf-8">
        <title>Crud com PDO</title>
    </head>
    
    <body>
        
        <?php
        
        require_once 'Model/Produto.php';
        require_once 'Model/ProdutoDAO.php';
        
        //Pegando as variáveis     
        if(isset($_POST['enviar'])){
        
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        
        $produto = new Produto();
        $produto->setNome($nome);
        $produto->setDescricao($descricao); 
        $produtoDAO = new ProdutoDAO();
        $produtoDAO->Criar($produto);
        
        echo "<h1> Formulario enviado com sucesso !!! </h1>";
        
        }
      
        ?>
        
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            
            Nome: <input type="text" name="nome"><br><br>
            Descricao: <input type="text" name="descricao"><br><br>
            <button type="submit" name="enviar"> Enviar Formulario </button>
            
        </form>
        
        <hr>
        
        <h1> Lista de produtos cadastrados </h1>
        
        <?php
         
        //listar
        $produtoDAO = new ProdutoDAO();
        $produtoDAO->Ler();
        foreach ($produtoDAO->Ler() as $produto){    
        ?>
        
         <td> <?php echo $produto['nome'] ?> </td>
         <td> <?php echo $produto['descricao'] ?> </td>
         <td> <a href="../App/Model/update.php?id=<?php echo $produto['id'] ?>"> editar </a> </td>
         <td> <a href="../App/Model/excluir.php?id=<?php echo $produto['id'] ?>"> excluir </a> </td>
        
        <?php
        }
        ?>
       
    </body>
    
</html>

