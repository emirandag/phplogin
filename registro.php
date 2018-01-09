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
        
        <form method="POST" action="co/UserCO.php">
            NOMBRE: <input type="text" name="nombre" /><br>
            PASSWORD: <input type="password" name="password" /><br>
            EMAIL: <input type="text" name="mail" /><br>
            <input type="hidden" name="idNav" value="registro" />
            <input type="submit" action="Registrar" value="Registrar"/><br>
        </form> 
    </body>
</html>
