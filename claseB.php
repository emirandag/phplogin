<?php

spl_autoload_register(function (  $nombreClase ){
    require_once $nombreClase.'.php';
});


class ClaseB {
    
    
    public $claseA;
    

    function __construct() {
        echo 'ClaseB';
        $this->claseA = new ClaseA();
    }
}
$b = new ClaseB();

?>

