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
        if (isset($_POST['user']) && isset($_POST['pass'])) {
            session_start();
            $_SESSION['login_user'] = $_POST['user'];
            echo "Nombre: " . $_SESSION['login_user'];
            echo "Correo: " . $_SESSION['mail'];
        } 
        ?>
    </body>
</html>
