<?php

spl_autoload_register(function($nombreClase) {
    require_once "../db/".$nombreClase . '.php';
});

class UserDAO {

    public $con;

    function __construct() {
        $conection = new Conectar();
        $this->con = $conection->getConexion();
    }

    function registro($name, $email, $pass) {
        if ($this->con != FALSE) {
            $insert = "INSERT INTO users (email, name, password) VALUES ('" . $email . "', '" . $name . "', md5('" . $pass . "'))";

            //Comprobación de insert
            if ($this->con->query($insert) === TRUE) {
                echo "Se ha registrado correctamente";
            } else {
                echo "ERROR" . $con->error;
            }
            $this->con->close();
        }
    }

}

?>