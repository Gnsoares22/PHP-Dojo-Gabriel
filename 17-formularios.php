<html>
    <body>

        <?php
        //VALIDAÇÃO DOS CAMPOS
        
        //isset verifica se a variavel existe
        if(isset($_POST['enviar'])){
            $erros = array();
          
            //VALIDAÇÃO PARA IDADE
            if(!$idade = filter_input(INPUT_POST, "idade",FILTER_VALIDATE_INT)){ 
                $erros[] = "Idade inválida";
            } 
            
            //VALIDAÇÃO PARA EMAIL
            //FILTER SANITIZE LIMPA QUALQUER ERRO DE CARACTER COMETIDO DURANTE A DIGITAÇÃO DO EMAIL
            //FILTER_VALIDATE_EMAIL
            $email = filter_input(INPUT_POST, "email",FILTER_SANITIZE_EMAIL);
            
            //variavel filtro
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $erros[] = "Email inválido";
            }
            
             //VALIDAÇÃO PARA PESO
            if(!$peso = filter_input(INPUT_POST, "peso",FILTER_VALIDATE_FLOAT)){ 
                $erros[] = "Peso inválido (use virgula)";
            } 
            
            //verifica se o array erros não está vazio 
            //empty vazio
            if(!empty($erros)){
               
                foreach ($erros as $informacao){
                    echo "<li> $informacao </li>";
                }
                
            } else {
                echo "Seus dados foram enviados com sucesso !!!";
                echo $email;
            }
        }
       
        ?>
        
        
        <?php
        
        //Filtros de sanitização (limpeza de dados)
        
        
        
        ?>

        <!-- POST envia direto e GET envia pela url -->
        <form action="<?php echo $_SERVER['PHP_SELF'] //pega o caminho do arquivo ?>" method="POST">   
            Nome: <input type="text" name="nome"><br><br>
            Idade: <input type="text" name="idade"><br><br>
            Email: <input type="email" name="email"><br><br>
            Peso: <input type="text" name="peso"><br><br>
            
            <button type="submit" name="enviar"> Enviar </button>
        </form>

    </body>
</html>

