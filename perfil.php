 <?php
session_start();
if (!isset($_SESSION['email']))
   
	die('<h1>Sessao nao iniciada!</h1>');
 ?>

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
         <link rel="stylesheet" href="estilos_perfil.css" type="text/css" media="screen, projection"/>
    </head>
    <body> 
       
        <div id="banner"> <div id="cont_banner">
           
             <a class="btn" href='index.php'>Voltar</a>
                
            </div>
        </div>  
        <br>
        <div id="tudo">
        
        <br>
        <br>
        <br>
        
        
        
        
        
        
        
        <div id="inf">
        <?php
        include ('vem.php');
        
       
        
        
         $user = $_SESSION['email'];
	$sql = "SELECT * FROM usuarios
			where email ='$user'";
        $res = mysql_query($sql);
        while ($row = mysql_fetch_array($res)) {
            echo "<table><tr><td> <font size ='+5'> <b> bem vindo </b></td></tr>";
          
            echo "<tr><td> <font size ='+2' color='#000099'>"  . $row['nome']  . "</b></td></tr>";
             echo "<tr><td><b>Sobrenome:</b> </td></tr>";
            echo "<tr><td>" . $row['sobrenome'] . "</td></tr></table";
            echo "<tr><td><b>Idade: </b> </td></tr>";
            echo "<tr><td>" . $row['idade'] . "</td></tr></table";
             echo "<tr><td><b>Sexo: </b> </td></tr>";
            echo"<tr><td>" . $row['sexo'] . "</td></tr>";
             echo "<tr><td><b>Email: </b> </td></tr>";
            echo"<tr><td>" . $row['email'] . "</td></tr>";
            
            
           
        }
        
        ?>
    </div>
     
        </div>
         
        
        
        
        
        
    </body>
</html>
