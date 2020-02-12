<?php

 require_once 'ProdutoDAO.php';
 require_once 'Produto.php';

 //pegando o id pela URL
 $id = $_GET['id'];
 
 $produto = new ProdutoDAO();
 $dados = $produto->selecionaId($id);
 
 ?>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    
    <input type="hidden" value="<?php echo $id ?>" name="id" >
            
    Nome: <input type="text" value="<?php echo $dados['nome']; ?>" name="nome"><br><br>
           
    Descricao: <input type="text" value="<?php echo $dados['descricao']; ?>" name="descricao"><br><br>
            <button type="submit" name="enviar"> Enviar Formulario </button>
            
 </form>
        
<a href="../index.php"> Voltar pagina cadastro </a>

<?php

//atualiza

if(isset($_POST['enviar'])){

$nome =  $_POST['nome'];
$descricao = $_POST['descricao'];
$id =  $_POST['id'];

//produto classe
$produto = new Produto();
$produto->setId($id);
$produto->setNome($nome);
$produto->setDescricao($descricao);

$atualiza = new ProdutoDAO();
$atualiza->Update($produto);

//manda para a pagina index
header("Location: ../index.php");


}

?>