<!-- formulario de cadastro -->

<?php
require_once 'conexao.php';

if (isset($_POST['enviar'])) {

    $msg = array();

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    
   // mysql_escape_string($unescaped_string)

    //verifica se os campos estão vazios
    if (empty($nome) or empty($sobrenome) or empty($idade) or empty($email)) {

        $msg[] = "Preencha todos os campos";
    } else {

        //cadastra clientes no banco
        $sql = "INSERT INTO clientes (cli_nome,cli_sobrenome,cli_email,cli_idade) VALUES('$nome','$sobrenome','$email','$idade')";

        if (mysqli_query($conexao, $sql)) { 

            echo "Cliente Cadastrado com sucesso !!";
            
        } else {

            echo "Erro ao cadastrar !!";
        }
    }
}

//Adicionar registro em um arquivo
  $sql = "SELECT * FROM clientes";
  $resultado1 = mysqli_query($conexao, $sql);
    
  $caminho = fopen("/Users/Gabriel/Desktop/pessoas.txt", "w");

  while($data = mysqli_fetch_array($resultado1)){
      
      $registro = "$data[cli_nome], $data[cli_sobrenome], $data[cli_idade]"
              . ", $data[cli_email]";
      
      fwrite($caminho, $registro . PHP_EOL);
      
     }
     fclose($caminho);
     
  //Listar dados
  $sql = "SELECT * FROM clientes";
  $resultado2 = mysqli_query($conexao, $sql);
?>

<h1> Cadastrar clientes </h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

    Nome do cliente: <input type="text" name="nome"><br><br>
    Sobrenome do cliente: <input type="text" name="sobrenome"><br><br>
    Idade: <input type="text" name="idade"><br><br>
    E-mail: <input type="email" name="email"><br><br>

    <input type="submit" name="enviar">

</form>

<?php
if (!empty($msg)) {
    foreach ($msg as $mensagem) {

        echo $mensagem;
    }
}
?>

<hr>

<h1> Lista de clientes </h1>

<table border="1">
    <tr>
        <td>Nome</td>
        <td>Sobrenome</td>
        <td>Idade</td>
        <td>E-mail</td>
    </tr>
<?php while($dados = mysqli_fetch_array($resultado2)){?>
    <tr>
        <td><?php echo $dados['cli_nome']; ?> </td>
        <td><?php echo $dados['cli_sobrenome']; ?> </td>
        <td><?php echo $dados['cli_idade']; ?> </td>
        <td><?php echo $dados['cli_email']; ?> </td>
        <td><a href="editar.php?id=<?php echo $dados['cli_id']; ?>"> Editar </a></td>
        <td><a href="deletar.php?id=<?php echo $dados['cli_id']; ?>"> Deletar </a></td>

    </tr>  
    
<?php } ?>
    
 
</table>
