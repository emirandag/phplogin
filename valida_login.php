<?php

include("header.php");
?>

<?php

$servername="localhost";
$username="iaw26540084";
$password="1234";
$database="test1";

$con =  new mysqli($servername,$username,$password,$database);

if ( $con->connect_error ) {
    echo ("Fallo en la conexión".$con->connect_error);
}



$nombre = $_POST['user'];
$pass = $_POST['pass'];

    
$sql = "SELECT * FROM users where name= '".$nombre."' AND password = md5('".$pass."');";

$result = $con->query($sql);
        if ($result->num_rows > 0) {
            $result = $result->fetch_assoc();
            session_start();
            $_SESSION['user'] = $result;
             require("mostra_dades.php");
             $con->close();
        } else {
            echo "sin registros";
        }
?>


<?php

include("footer.php");
?>