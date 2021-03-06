<?php

spl_autoload_register(function($nombreClase) {
    require_once "../db/" . $nombreClase . '.php';
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
                echo "¡¡¡Se ha registrado correctamente!!!<a href='../webs/formulari_login.php'>Iniciar sesión<a>";
            } else {
                echo "<hr>¡¡¡ERROR!!!" . $this->con->error . "<hr>";
            }
            $this->con->close();
        }
    }

    function valida($email, $pass) {
        if ($this->con != FALSE) {
            $login = "SELECT * FROM users WHERE email= '" . $email . "'";
            //si pass esta vacio entonces select where name = user;
            if ($pass != NULL && isset($pass) && $pass != "") {
                $login .= " AND password = md5('" . $pass . "');";
            }

            $result = $this->con->query($login);
            if ($result->num_rows > 0) {
                $result = $result->fetch_assoc();
                session_start();
                $_SESSION['user'] = $result;
                $this->con->close();
                header("Location: ../webs/mostra_dades.php");
            } else {
                echo "¡Usuario no válido!";
            }
        }
    }

    function borrar($id) {
        if ($this->con != FALSE) {

            $delete = "DELETE FROM users WHERE user_id=" . $id;


            if ($this->con->query($delete) === TRUE) {
                echo "*****¡Sus datos han sido borrados correctamente!***** <a href='../webs/registro.php'><b>OK</b><a>";
            } else {
                echo "<hr>¡¡¡ERROR, lo sentimos, de momento no podemos dejarte escapar!!!" . $con->error . "<hr>";
            }
            $this->con->close();
        }
    }

    function editar($name, $email, $id) {
        if ($this->con != FALSE) {

            $update = "UPDATE users SET email = '" . $email . "', name = '" . $name . "' where user_id = " . $id;



            if ($this->con->query($update) === TRUE) {
                
            }
            //$this->con->close();*/
            $this->valida($email, "");
        }
    }

}

?>