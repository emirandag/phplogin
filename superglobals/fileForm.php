<form enctype="multipart/form-data" action="file.php" method="POST">
    <!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
    <input type="hidden" name="500000" value="30000" />
    <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
    Enviar este fichero: <input name="fichero_usuario" type="file" />
    <input type="submit" value="Enviar fichero" />
</form>