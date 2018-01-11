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

    //funcion para realizar el registro del usuario
    function registro($name, $email, $pass) {
        if ($this->con != FALSE) {
            $insert = "INSERT INTO users (email, name, password) VALUES ('" . $email . "', '" . $name . "', md5('" . $pass . "'))";
            //Comprobación de insert
            if ($this->con->query($insert) === TRUE) {
                echo "¡¡¡Se ha registrado correctamente!!!";
            } else {
                echo "<hr>¡¡¡ERROR!!!" . $con->error ."<hr>";
            }
            $this->con->close();
        }
    }
    
    
    function valida($user, $pass) {
        if ($this->con != FALSE) {
            $login = "SELECT * FROM users WHERE name= '".$user."' AND password = md5('".$pass."');";
            
            $result = $this->con->query($login);
        if ($result->num_rows > 0) {
            $result = $result->fetch_assoc();
            session_start();
            $_SESSION['user'] = $result;
            echo "Bienvenido a tu sesión "."<b>".$user."</b>";
            // require("mostra_dades.php");
             $this->con->close();
        } else {
            echo "sin registros";
        }
        }
    }
    

}

?>