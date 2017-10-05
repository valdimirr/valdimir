<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <?php
         include ('vem.php'); 
        // conexão banco de dados
              
        $nome = $_POST ["nome"];
        $email = $_POST ["email"];
        $conf_email = $_POST ["conf_email"];
        $senha = $_POST ["senha"];
        $conf_senha = $_POST ["conf_senha"];
        $idade = $_POST ["idade"];
        $sexo = $_POST ["sexo"];
        $sobrenome = $_POST ["sb"];
        
        
            
            
        
        
        
           if ("" == $nome){
               echo '<h1>Você não preencheu seu Nome.</h1>';
               echo '<a href="cadastro.php">Clique para Voltar</a>';
           }else
                 if ("" == $sobrenome){
               echo '<h1>Você não preencheu seu Sobrenome.</h1>';
               echo '<a href="cadastro.php">Clique para Voltar</a>';
           }else
                 if ("" == $idade){
               echo '<h1>Você não preencheu sua Idade.</h1>';
               echo '<a href="cadastro.php">Clique para Voltar</a>';
           }else{
               if ("" == $conf_email){
               echo '<h1>Você não confirmou seu E-mail.</h1>';
               echo '<a href="cadastro.php">Clique para Voltar</a>';
           }else
               if ("" == $email){
               echo '<h1>Você não preencheu seu E-mail.</h1>';
               echo '<a href="cadastro.php">Clique para Voltar</a>';
           }else
               if ("" == $senha){
               echo '<h1>Você não preencheu sua Senha.</h1>';
               echo '<a href="cadastro.php">Clique para Voltar</a>';
           }else
               if ("" == $conf_senha){
               echo '<h1>Você não confirmou sua Senha.</h1>';
               echo '<a href="cadastro.php">Clique para Voltar</a>';
           }else
           
           
           
               
           
           
        
        
        if($conf_senha == $senha){
        if($conf_email == $email){
            
          
        $sql = "insert into usuarios (nome, email, senha,idade,sexo,sobrenome)
            values ('$nome' , '$email' , '$senha', '$idade', '$sexo', '$sobrenome')";
        $res = mysql_query($sql);
        echo 'Dados inseridos com Sucesso!';
        echo "<br><a href='perfil.php'><h1>Clique para continuar</h1>";
        
        }else{ 
            echo'O email não confere';
        }
        }else{
            echo'A senha não confere';
        }
           }
           
           
           
           
           
           
           
           
           
           
        ?>
    </body>
</html>
