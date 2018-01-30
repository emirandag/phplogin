<?php

//import automatico de clases
spl_autoload_register(function($nombreClase) {
    switch ($nombreClase) {
        case "Conectar":
            require_once "../db/" . $nombreClase . ".php";
            break;
        case "producto":
            require_once "../bean/" . $nombreClase . ".php";
            break;
    }
});

class productosPDO {

    public $con;

    function __construct() {
        $conection = new Conectar();
        $this->con = $conection->getConexion();
    }

    function getProductos() {
        $productos = array();
        if ($this->con != FALSE) {
            $productosstr = "select * from productos";

            $resultado = $this->con->query($productosstr);

            while ($row = $resultado->fetch_assoc()) {
                array_push($productos, new producto($row['id'], $row['name'], $row['descripcion'], $row['precio']));
            }
            $this->con->close();
            return $productos;
        }
    }

}

?>