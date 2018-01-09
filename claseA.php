<?php

spl_autoload_register(function ( $nombreClase ) {
    require_once $nombreClase . '.php';
});

class ClaseA {

    private $var = "hola";
    protected $var2 = "hola2";
    public $var3 = "hola3";

    public function __construct() {
        echo "hola ClaseA";
    }

    public function ClaseA() {
        echo "hola ClaseA 2";
    }

    function getVar() {
        return $this->var;
    }

    function getVar2() {
        return $this->var2;
    }

    function getVar3() {
        return $this->var3;
    }

    function setVar($var) {
        $this->var = $var;
    }

    function setVar2($var2) {
        $this->var2 = $var2;
    }

    function setVar3($var3) {
        $this->var3 = $var3;
    }

}

$a = new ClaseA();

echo $a->getVar2();
?>
