<!--  http://aprendeenlinea.udea.edu.co/lms/moodle/mod/page/view.php?id=75233 -->

<?php
//import automatico de clases
spl_autoload_register(function($nombreClase) {
    switch ($nombreClase) {
        case "productosPDO":
            require_once "../dao/" . $nombreClase . ".php";
            break;
        case "carroPDO":
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
        <title>Cesta</title>
        <link rel="stylesheet" href="../css/skel.css" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/style-wide.css" />
    </head> 
    <body> 
        <header id="header" class="skel-layers-fixed">

            <nav id="nav">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="mostra_dades.php">Perfil</a></li>    
                    <li><a href="productos.php">Productos</a></li> 
                    <li><a href="cesta.php">Carro</a></li> 
                </ul>
            </nav> 
        </header>
        <section id="main" class="container 75%"> 


            <div class="box" align="center">
                <h2>
                    ¡Los productos añadidos a tu cesta!
                </h2>
        <form action="../co/controller.php" method="POST"> 
            <input type="hidden" name="idNav" value="agregar" />
            <table border="1"> 
                <?php
                $cesta = new carroPDO();
                $array = $cesta->getCesta();
                foreach ($array as $key => $cesta) {
                    echo '<tr> 
                    <td width="150"> 
                        Producto: <b> ' . $cesta->getName() . '</b><br> 
                        Precio: <b>'. $cesta->getPrecio() .'</b><br> 
                        Cantidad: <b>'. $cesta->getCantidad() .'</b><br> 
                        Total: <b>'. $cesta->getTotal() .'</b><br> 
                        <input type="hidden" name="idProducto" value="'.$key.'"/>
                        <input type="submit" value="Gestionar pago" />
                    </td> 
                </tr>';
                }
                ?>
            </table> 
            
        </form> 
            </div>
        </section>
    </body> 
</html>