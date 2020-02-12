<?php

//Editar dados
require_once 'conexao.php';

$id = $_GET['id'];
$sql = "SELECT * FROM clientes WHERE cli_id = '$id'";
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($resultado);

if(isset($_POST['atualizar'])){
    
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    
    
   $sql = "UPDATE clientes SET cli_nome = '$nome', cli_sobrenome = '$sobrenome', cli_idade = '$idade',"
           . "cli_email = '$email' WHERE cli_id = '$id'";
   
   if(mysqli_query($conexao, $sql)){
       
       echo "Atualizado com sucesso !!!";
   }
}

?>

<form action="editar.php?id=<?php echo $id; ?>" method="POST">

    Nome do cliente: <input type="text" value="<?php echo $dados['cli_nome'] ?>" name="nome"><br><br>
    Sobrenome do cliente: <input type="text" value="<?php echo $dados['cli_sobrenome'] ?>" name="sobrenome"><br><br>
    Idade: <input type="text" value="<?php echo $dados['cli_idade'] ?>" name="idade"><br><br>
    E-mail: <input type="email" value="<?php echo $dados['cli_email'] ?>" name="email"><br><br>

    <button type="submit" name="atualizar"> Atualizar </button>

</form>

<a href="cadastrar.php"> Voltar para a pagina principal </a>
    
    