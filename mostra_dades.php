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
        
        session_start();
        
        echo "Nombre: ".$_SESSION['user']['name']."<br>"."Email: ".$_SESSION['user']['email'];
                
        ?>
        
        <form method="POST" action="edicio_usuari.php">
            <input type="submit" value="Editar">
        </form>
        <form method="POST" action="esborra_usuari.php">
            <input type="submit" value="Borrar">
        </form>
    </body>
</html>
