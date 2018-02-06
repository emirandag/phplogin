<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
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
                    Iniciar sesión
                </h2>
                <form method="POST" action="../co/controller.php">
                    <b>USUARIO:</b> <input type="text" name="user" required/>
                    <b>PASSWORD:</b> <input type="password" name="pass" required/>
                    <input type="hidden" name="idNav" value="valida" />
                    <input type="submit" value="Validar" />
                </form>
            </div>
        </section>
    </body>
</html>