<?php

class Utils {

    function logSQL($mensaje) {
        $config = require "../config/config.php";
        $file = $config["logFile"];

        $contenido = file_get_contents($file);

        $contenido .= date("d/m/Y G:i:s") . " ==== " . json_encode($mensaje) . "\n";
        file_put_contents($file, $contenido);
    }

}

?>
