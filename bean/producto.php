<?php

class producto {

    private $id;
    private $name;
    private $descripcion;
    private $precio;

    function __construct($id, $name, $descripcion, $precio) {
        $this->id = $id;
        $this->name = $name;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
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
