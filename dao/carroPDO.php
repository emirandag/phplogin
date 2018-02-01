<?php

//import automatico de clases
spl_autoload_register(function($nombreClase) {
    switch ($nombreClase) {
        case "Conectar":
            require_once "db/" . $nombreClase . ".php";
            break;
        case "producto":
            require_once "bean/" . $nombreClase . ".php";
            break;
    }
});

class carroPDO {

    public $con;

    function __construct() {
        $conection = new Conectar();
        $this->con = $conection->getConexion();
    }

    function anadirCesta($productoid) {
        if ($this->con != FALSE) {
            $cantidad = $this->existeEnCesta($productoid);
            $sql  = ($cantidad == 0) ? 
                    "INSERT INTO cesta(product_id, cantidad, user_id) "
                    . "VALUES (" . $productoid . ", 1, " . $_SESSION['user']['user_id'] . ")":
                "UPDATE cesta set cantidad = ".($cantidad +1)
                    ." where user_id = ".$_SESSION['user']['user_id']." and product_id = ".$productoid."";
            //Comprobación de insert
            if ($this->con->query($sql) === TRUE) {
                
            }
            $this->con->close();
        }
    }

    function existeEnCesta($productId) {
        session_start();
        $cantidad = 0;
        $sql = "SELECT ifNull(cantidad, 0) as cantidad from cesta where "
                . "product_id = " . $productId 
                . " AND user_id = ".$_SESSION['user']['user_id']
                . " union select 0";
        if ($this->con != FALSE) {
            $result = $this->con->query($sql);
            if ($result->num_rows > 0) {
                $cantidad = $result->fetch_assoc()['cantidad'];
            }
        }
        //php mysql retorne la primera columna de la primera row
        return $cantidad;
    }
    
    function getCesta() {
        $cesta = array();
        if ($this->con != FALSE) {
            session_start();
            $idUser = $_SESSION['user']['id'];
            $sql = "select c.id, c.product_id, c.cantidad, p.name, p.precio "
                    . "from cesta c, productos p "
                    . "where c.producto_id = p.id "
                    . "AND c.user_id = ".$idUser;

            $resultado = $this->con->query($sql);

            while ($row = $resultado->fetch_assoc()) {
                array_push(
                $cesta,
                new carro($row['id'], $row['product_id'], $row['cantidad'], $idUser, $row['name'], $row['precio']));
            }
            $this->con->close();
            return $cesta;
        }
    }

}

?>