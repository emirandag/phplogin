

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
        <title>Productos</title>
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
                    ¡Escoge nuestros productos!
                </h2>
                <table border="1"> 
                    <?php
                    $products = new productosPDO();
                    $array = $products->getProductos();
                    foreach ($array as $producto) {
                        echo '<tr> 
                    <td width="150"> 
                    <form action="../co/controller.php" method="POST"> 
                    <input type="hidden" name="idNav" value="agregar" />
                        Producto: <b> ' . $producto->getName() . '</b><br> 
                        Descripcion: <b>' . $producto->getDescripcion() . '</b><br> 
                        Precio: <b>' . $producto->getPrecio() . '</b><br> 
                        <input type="hidden" name="idProducto" value="' . $producto->getId() . '"/>
                        <input type="submit" value="Agregar al carrito" />
                          </form> 
                    </td> 
                </tr>';
                    }
                    ?>
                </table> 


            </div>
        </section>
    </body> 
</html>
