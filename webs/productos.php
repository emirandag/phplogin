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
        <form action="carro.php" method="POST"> 
            <input type="hidden" name="idProduct" value="agregar"> 
            <table border="1"> 
                <?php
                $products = new productosPDO();
                $array = $products->getProductos();
                foreach ($array as $producto) {
                    echo '<tr> 
                    <td width="150"> 
                        Producto: <b> ' . $producto->getName() . '</b><br> 
                        Descripcion: <b>' . $producto->getDescripcion().'</b><br> 
                        Precio: <b>'. $producto->getPrecio() .'</b><br> 
                        <input type="submit" name="TV" id="button" value="Añadir al carrito">
                    </td> 
                </tr>';
                }
                ?>
            </table> 
        </form> 
        <form action="products.php" method="get"> 
            <h1>En el carrito de compras tiene los siguientes productos</h1> 
            <input type="hidden" name="quitar"> 
            <?php
            if (!empty($_SESSION['pedido'])) { //Si hay productos en el carrito
                foreach ($_SESSION['pedido'] as $prod => $unidades) {
                    echo "$unidades unidades del producto $prod";
                    echo "<input type='Submit' name='$prod' value='Quitar'><br>";
                }
                ?> 
            </form> 
            <form action="confirmar.php" method="post"> 
                <input type='Submit' name='Comprar' value="Confirmar compra"> 
            </form> 
            <?php
        }
        ?> 
    </body> 
</html>
