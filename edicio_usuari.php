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
        
        <form method="POST" action="co/controller.php">
            NOMBRE: <input type="text" name="nombre"/>
            EMAIL: <input type="text" name="email"/>
            <input type="hidden" name="idNav" value="editar" />
            <input type="submit" value="Editar">
        </form>
    </body>
</html>