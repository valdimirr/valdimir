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
         <link rel="stylesheet" href="estilos_cad.css" type="text/css" media="screen, projection"/>
    </head>
    <body>
        <div id="banner"> 
            <div id="cont_banner"> </div>
            
        </div>
        <div id="barra1"> </div>
        <div id="barra"> </div>
        <div id="tudo">
             <div id="cad">
         <form id="form1" name="form1" method="post" action=insere_cad.php>
             <table  width='150' border="0" style="color:seagreen">
                 <tr>
                     <td style="font:bold 17px  serif;">Nome: <input  name="nome" type="text" id="nome" size=""/></td>
                      </tr>
                      <tr>
                   
                          <td style="font:bold 17px  serif;"> Sobrenome: <input name="sb" type="text" id="sb" size=""/></td>
                           </tr>
                      <tr>
                          <td style="font:bold 17px  serif;"> Qual seu sexo? <select name="sexo" id="sexo">
            <option value="homem">Homem</option>
            <option value="mulher">Mulher</option>
                              </select></td>
                               </tr>
                               <tr>
                               <td style="font:bold 17px  serif;">Idade: <input name="idade" type="text" id="idade" size=""/></td>
                           </tr>
                      <tr>
                          <td style="font:bold 17px  serif; " > E-mail: <input name="email" type="text" id="email" size=""/></td>
                           </tr>
                      <tr>
                          <td width='300'style="font:bold 17px  serif;">Confirmar E-mail: <input name="conf_email" type="text" id="conf_email" size=""/></td>
                           </tr>
                           
                      <tr>
                          <td style="font:bold 17px  serif;">Senha: <input name="senha" type="password" id="senha" size=""/></td>
                           </tr>
                           
                      <tr>
                          <td  style="font:bold 17px  serif;"> Confirmar Senha: <input name="conf_senha" type="password" id="conf_senha" size=""/></td>
                           </tr>
                           <tr>
        
                               <td> <input type="submit" name="enviar" id="enviar" value="Cadastrar-se"/>          <input type="reset" name="limpar" id="limpar" value="Limpar"/></td>
                               <td width='500'> <a href="index.php">Voltar</a> </td>
                           </tr>
                           
             </table>
            </form>
        </div>
        
        
        
        
        
        
        
        
        
  
    </div>
        
        
        
        
    </body>
</html>
