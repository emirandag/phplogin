<?php

spl_autoload_register(function ( $nombreClase ) {
    require_once $nombreClase . '.php';
});

class Producto {

    private $id = "id";
    private $name = "name";
    private $descripcion = "descripcion";
    private $precio = "precio";

    function __construct() {
        
    }
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getPrecio() {
        return $this->precio;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    

}

?>
