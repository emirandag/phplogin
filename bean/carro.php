<?php

class carro {

    private $id;
    private $productid;
    private $cantidad;
    private $userid;
    private $name;
    private $precio;
    private $total;

    function getName() {
        return $this->name;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getTotal() {
        return $this->total;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setTotal($total) {
        $this->total = $total;
    }

    function __construct($id, $productid, $cantidad, $userid, $name, $precio) {
        $this->id = $id;
        $this->productid = $productid;
        $this->cantidad = $cantidad;
        $this->userid = $userid;
        $this->name = $name;
        $this->precio = $precio;
        $this->total = $this->precio * $this->cantidad;
    }

    function getId() {
        return $this->id;
    }

    function getProductid() {
        return $this->productid;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getUserid() {
        return $this->userid;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setProductid($productid) {
        $this->productid = $productid;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setUserid($userid) {
        $this->userid = $userid;
    }

}

?>
