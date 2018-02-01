<?php

//import automatico de clases
spl_autoload_register(function($nombreClase) {
    if ($nombreClase == "UserDAO") {
        require_once "../dao/" . $nombreClase . ".php";
    } else if ($nombreClase == "Conectar") {
        require_once "../db/" . $nombreClase . ".php";
    } else if ($nombreClase == "carroPDO") {
        require_once "../dao/" . $nombreClase . ".php";
    }
});


$idNav = $_POST["idNav"];

if (isset($idNav)) {
    $dao = new UserDAO();

    if ($idNav == "registro") {

        $name = $_POST['nombre'];
        $email = $_POST['mail'];
        $pass = $_POST['password'];
        $dao->registro($name, $email, $pass);
    }

    if ($idNav == "valida") {

        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $dao->valida($user, $pass);
    }

    if ($idNav == "borrar") {

        $id = $_POST['id'];
        $dao->borrar($id);
    }

    if ($idNav == "editar") {

        $name = $_POST['nombre'];
        $email = $_POST['email'];
        $id = $_POST['id'];
        $dao->editar($name, $email, $id);
    }

    if ($idNav == "agregar") {
        $carroPDO = new carroPDO();
        $idProducto = $_POST['idProducto'];
        $carroPDO->anadirCesta($idProducto);
        header("Location: ../webs/productos.php");
    }
}
?>
