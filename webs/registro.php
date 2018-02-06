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
        <link rel="stylesheet" href="../css/skel.css" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/style-wide.css" />
    </head>
    <body>
        <header id="header" class="skel-layers-fixed">

           <!-- <nav id="nav">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Tarifas</a></li>
                    <li><a href="#">Seguros</a></li>
                    <li><a href="#">Jones</a></li>
                    <li><a href="registro.jsp">Registro</a></li>
                    <li><a href="login.jsp" class="button">Iniciar sesión</a></li>
                </ul>
            </nav> --></header>
        <section id="main" class="container 75%"> 
                
            
            <div class="box" align="center">
                <h2>
                    Registrarse
                </h2>
                <form name="valorRegistro" method="POST" action="../co/controller.php">
                    <b>NOMBRE:</b> <input type="text" name="nombre" required/><br>
                    <b>EMAIL:</b> <input type="text" name="mail" required/><br>
                    <b>PASSWORD:</b> <input type="password" name="password" required/><br>
                    <input type="hidden" name="idNav" value="registro" />
                    <input name="registrar" type="submit" value="Registrar"/><br>
                </form>
            </div>
        </section>
    </body>
</html>


<!--https://desarrolloweb.com/articulos/1767.php-->