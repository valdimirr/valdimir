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
       $conn = @mysql_connect('127.0.0.1','root','') or die ("Mula");
        $db = @mysql_select_db('forum', $conn) or die ("Burrice"); 
        ?>
    </body>
</html>
