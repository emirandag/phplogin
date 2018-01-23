<?php

spl_autoload_register(function($nombreClase) {
    require_once "../db/" . $nombreClase . '.php';
});

class productosPDO {

    public $con;

    function __construct() {
        $conection = new Conectar();
        $this->con = $conection->getConexion();
    }

}

function getProductos() {
    $productos = array();
    if ($this->con != FALSE) {
        $productos = "select * from productos";

        $resultado = $this->con->query($productos);

        while ($row = mysql_fetch_assoc($resultado)) {
            array_push($productos, new Producto($row['id'], $row['name'], $row['descripcion'], $row['precio']));
        }
        
    }
    
    return $productos;
}

?>