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

echo "Conexión establecida<br>";

$nombre = $_POST['user'];
$pass = $_POST['pass'];
    
$sql = "SELECT * FROM users";
$result = $con->query($sql);

?>
<?php



if (isset($_POST['user']) && isset($_POST['pass'])) {
        session_start();
        $_SESSION['login_user'] = $_POST['user'];
        echo "Sesión iniciada " . $_SESSION['login_user'];
}
   else {
        echo "Credenciales invalidas";
        //session_start();
       //$_SESSION['user'] = $_POST['user'];
        //echo "Sesión iniciada " . $_SESSION['user'];
    
}
if (isset($_SESSION['login_user'])) {
    
        require("menu.php");
    
}
?>

<?php

include("footer.php");
?>