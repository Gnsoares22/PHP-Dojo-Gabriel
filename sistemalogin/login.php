<html>
    <head>
        <title> Login </title>
        <meta charset="utf-8">
        
    </head>
    
    <body>
        
         <?php   
         
         //importa o conteudo da conexao para esta pagina
        require_once 'conexao.php';
        
        //inicia a sessão
        session_start();
      
         //Se o botao enviar foi ativado
         if(isset($_POST['enviar'])){
              
        $erros = array();
        
        //deixa o caracter no forma seguro SQL
        $login = mysqli_escape_string($conexao, $_POST['login']);
        $senha = mysqli_escape_string($conexao, $_POST['senha']);
        
        if(empty($login) or empty($senha)){
            
            $erros[] = "Preencha o campo login e o campo senha";
            
        } else{
             $sql = "SELECT login FROM usuarios WHERE login = '$login'";
             $resultado = mysqli_query($conexao, $sql);
             
             if(mysqli_num_rows($resultado) > 0){
                         
             $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha='$senha'"; //seleciona o login e a senha
             $resultado = mysqli_query($conexao, $sql);
             
             if(mysqli_num_rows($resultado)== 1){ //se existir 1 correspondencia
                 
                 $dados = mysqli_fetch_array($resultado); //tras um array com todos os dados do banco
                 $_SESSION['logado'] = true; //cria uma sessao para logado
                 $_SESSION['id_usuario'] = $dados['id']; //recupera o id do usuario logado
                 header('location: home.php'); //manda para a pagina home
                 
             } else {
                 $erros[] = "Login e senha inválidos";
             }
             ///////////////        
             } else {
                 
                 $erros[] = "Usuário não encontrado na base de dados";
             }
        }
        
          } 
        ?>
        
        
        <h1> Login </h1>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            Login: <input type="text" name="login"><br><br>
            Senha: <input type="password" name="senha"><br><br>
            <button type="submit" name="enviar"> Entrar </button>
  
        </form>
        
        <hr>
        
         <?php
            //foreach para exibir os erros
         if(!empty($erros)){
            foreach($erros as $tiposerros){
                    echo $tiposerros;
                }
            }         
          ?>
        
    </body>
</html>
