
<?php


$dir_subida = '.';
$fichero_subido = $dir_subida . $_FILES['fichero_usuario']['name'];
echo "----------------->".$_FILES['fichero_usuario']['size'] . "  " . $fichero_subido;
echo "------------>" . $_FILES['fichero_usuario']['type'] . "<br/>";
echo '<pre>';
if (move_uploaded_file($_FILES['fichero_usuario']['name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

echo 'Más información de depuración:';
print_r($_FILES);

print "</pre>";

?>
