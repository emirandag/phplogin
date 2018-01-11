<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>login</title>
    </head>
    <body>
        <form method="POST" action="co/UserCO.php">
            USUARIO: <input type="text" name="user"/>
            PASSWORD: <input type="password" name="pass" />
            <input type="hidden" name="idNav" value="valida" />
            <input type="submit" value="Validar" />
        </form>
    </body>
</html>