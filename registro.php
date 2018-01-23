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
        <script type="text/javascript">
            function reg() {
                regis = document.getElementById("caja");
                miNombre = "<h2>" + document.valorRegistro.nombre.value + "</h2>";
                miEmail = "<h3>" + document.valorRegistro.mail.value + "</h3>";
                miPassword = "<h4>" + document.valorRegistro.password.value + "</h4>";
                regis.innerHTML = miNombre + miEmail + miPassword;
            }
            window.onload = function () {
                document.valorRegistro.registrar.onclick = reg;
            }
        </script>
    </head>
    <body>
        <h1>Registrarse</h1>
        <div id="caja">
            <form name="valorRegistro" method="POST" action="co/controller.php">
                <b>NOMBRE:</b> <input type="text" name="nombre" /><br>
                <b>EMAIL:</b> <input type="text" name="mail" /><br>
                <b>PASSWORD:</b> <input type="password" name="password" /><br>
                <input type="hidden" name="idNav" value="registro" />
                <input name="registrar" type="button" value="Registrar"/><br>
            </form>
        </div>
    </body>
</html>


<!--https://desarrolloweb.com/articulos/1767.php-->