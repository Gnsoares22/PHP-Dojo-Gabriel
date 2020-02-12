<html>
    <body>
        
        <!-- Para enviar arquivo é obrigatorio adicionar um enctype multpart data -->
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
        
            <input type="file" multiple name="arquivo[]">
            <input type="submit" name="enviar">
        
        </form>
        
        <?php
        
        if(isset($_POST['enviar'])){
            
            //ARRAY COM FORMATOS PERMITIDOS DE IMAGEM
            $formatos = array("png","jpeg","jpg","gif");
            //EXIBE A EXTENSÃO DO ARQUIVO
            $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);  
          
            if(in_array($extensao, $formatos)){
                $pasta = "arquivos/"; //especifica o nome da pasta
                $temp = $_FILES['arquivo']['tmp_name']; //variavel temporaria carrega o nome do arquivo
                $novoNome = uniqid(). ".$extensao"; //adiciona um id unico a cada imagem
                
                //move o arquivo do upload para pasta 
                if(move_uploaded_file($temp, $pasta.$novoNome)){
                    $mensagem = "Upload feito com sucesso !!";
                }else{
                    $mensagem = "Erro ao fazer o upload";
                }
                
            } else {
                $mensagem = "Extensão inválida";
            }
        }
        
            echo $mensagem;
        
        ?>
        
    </body>  
</html>



