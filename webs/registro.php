<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
    </head>
    <body>
        <h1>Registrarse</h1>
        <div>
            <form name="valorRegistro" method="POST" action="../co/controller.php">
                <b>NOMBRE:</b> <input type="text" name="nombre" required/><br>
                <b>EMAIL:</b> <input type="text" name="mail" required/><br>
                <b>PASSWORD:</b> <input type="password" name="password" required/><br>
                <input type="hidden" name="idNav" value="registro" />
                <input name="registrar" type="submit" value="Registrar"/><br>
            </form>
        </div>
    </body>
</html>


<!--https://desarrolloweb.com/articulos/1767.php-->