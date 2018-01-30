<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>login</title>
    </head>
    <body>
        <h1>Iniciar sesión</h1>
        <form method="POST" action="../co/controller.php">
            <b>USUARIO:</b> <input type="text" name="user"/>
            <b>PASSWORD:</b> <input type="password" name="pass" />
            <input type="hidden" name="idNav" value="valida" />
            <input type="submit" value="Validar" />
        </form>
    </body>
</html>