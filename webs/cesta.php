<!--  http://aprendeenlinea.udea.edu.co/lms/moodle/mod/page/view.php?id=75233 -->

<?php
//import automatico de clases
spl_autoload_register(function($nombreClase) {
    switch ($nombreClase) {
        case "productosPDO":
            require_once "../dao/" . $nombreClase . ".php";
            break;
        case "producto":
            require_once "../bean/" . $nombreClase . ".php";
            break;
    }
});
?>

<html> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    </head> 
    <body> 
        <form action="../co/controller.php" method="POST"> 
            <input type="hidden" name="idNav" value="agregar" />
            <table border="1"> 
                <?php
                $cesta = new carroPDO();
                $array = $cesta->getCesta();
                foreach ($array as $key => $cesta) {
                    echo '<tr> 
                    <td width="150"> 
                        Producto: <b> ' . $producto->get() . '</b><br> 
                        Descripcion: <b>' . $producto->getDescripcion().'</b><br> 
                        Precio: <b>'. $producto->getPrecio() .'</b><br> 
                        <input type="hidden" name="idProducto" value="'.$key.'"/>
                        <input type="submit" value="Agregar al carrito" />
                    </td> 
                </tr>';
                }
                ?>
            </table> 
            
        </form> 
    </body> 
</html>