<?php

$servername = "localhost";
$username = "iaw26540084";
$password = "1234";
$database = "test1";

$con = new mysqli($servername, $username, $password, $database);

if ($con->connect_error) {
    echo ("Fallo en la conexión" . $con->connect_error);
} else {


//$sql = "SELECT * FROM users";
//$result = $con->query($sql);

    $mail = $_POST['mail'];
    $nombre = $_POST['nombre'];
    $pass = $_POST['password'];
    $insert = "INSERT INTO users (email, name, password) VALUES ('" . $mail . "', '" . $nombre . "', md5('" . $pass . "'))";

//Comprobación de insert
    if ($con->query($insert) === TRUE) {
        echo "Se ha registrado correctamente";
        
    } else {
        echo "ERROR" . $con->error;
    }


    $con->close();
}
?>