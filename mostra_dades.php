<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dades</title>
        <script type="text/javascript">
            function accion(n) {
                var action = "";
                switch (n) {
                    case 1:
                        action = "editar";
                        break;
                    case 2:
                        action = "borrar";
                        break;
                }
                console.log(action);
                document.forms.userDatos.idNav.value = action;
                console.log(document.forms.userDatos);
                document.forms.userDatos.submit();

                if (n === 1)
                    alert("Se han actualizado tus datos");
            }

        </script>
    </head>
    <body>


        <?php
        session_start();
        ?>

        
        <div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="mostra_dades.php">Perfil</a></li>    
                <li><a href="productos.php">Productos</a></li> 
                <li><a href="carro.php">Carro</a></li> 
            </ul>
        </div>
        <h1>¡Bienvenido a tu sesión!</h1>
        <form method="POST" action="co/controller.php" name="userDatos">
            <input type="hidden" name="idNav" value="" />
            <b>NOMBRE:</b> <input type="text" name="nombre" value="<?php echo $_SESSION['user']['name'] ?>"/><br>
            <b>EMAIL:</b>  <input type="email" name="email" value="<?php echo $_SESSION['user']['email'] ?>"/><br>
            <input type="hidden" name="id" value="<?php echo $_SESSION['user']['user_id'] ?>"/>
            <input type="button" value="Editar" onclick="accion(1);">
            <input type="button" value="Borrar" onclick="accion(2)">
        </form>
    </body>
</html>
