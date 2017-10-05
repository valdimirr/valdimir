


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
       


        $senha = $_POST ["senha"];
        $email = $_POST ["email"];
       
       
        
           $sql= "SELECT senha, email FROM usuarios
           WHERE email= '$email'";
            $res = mysql_query($sql);
            // verificar se localizou o email de login
            if ($row =mysql_fetch_array($res))
            {
                if ($senha == $row['senha'])
                {
                    session_start();
                    $_SESSION['email']=$email;  	
                    header ('location: perfil.php');
                    
                }else{
                    echo'<h1>Senha Inválida</h1>';
                    echo '<a href="index.php">Clique para Voltar</a>';
                }
            }else{
                echo '<h1>E-mail inválido</h1>';
                echo '<a href="index.php">Clique para Voltar</a>';
            }
            
        ?>
    </body>
</html>
