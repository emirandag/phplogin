<?php

class Conectar {
    
    private $host, $user, $pass, $db;
    
    public function __construct() {
        $config = require_once ("../config/config.php");
        $this->host = $config['host'];
        $this->db = $config['database'];
        $this->pass = $config['password'];
        $this->user = $config['user'];
    }
    
    public function getConexion() {
        echo $this->user;
        $con = new mysqli($this->host,"iaw26540084","1234","test1");
        
        if ($con->connect_error) {
            echo ("Fallo en la conexión con ".$con->connect_error."<br>");
            return FALSE;
        } else {
        return $con;
        }        
    }
}

?>
