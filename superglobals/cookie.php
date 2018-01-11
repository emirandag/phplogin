<?php 
setcookie("ejemusuario", $_GET['nombre'], time()+3600,"/","");
?>
<html>
<head>
   <title>Ejemplo de PHP</title>
</head>
<body>
<H1>Ejemplo de uso de cookie</H1>
<?php 
echo $_COOKIE['ejemusuario'] . "<<<<<<<<----<br/>";
unset($_COOKIE['ejemusuario']);
echo $_COOKIE['ejemusuario'] ;

?>
Se ha establecido una cookie de nombre <b>ejemusuario</b> con el valor: <b><? print $_GET['nombre']; ?></b> que será válida durante 1 hora.
</body>
</html> 