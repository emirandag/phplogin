<?php

//import automatico de clases
spl_autoload_register(function($nombreClase) {
    if ($nombreClase == "UserDAO") {
        require_once "../dao/" . $nombreClase . ".php";
    } else {
        require_once "../db/" . $nombreClase . ".php";
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
    } else {
    echo $idNav;
    }
}
?>
