<?php
    $texto = $_POST['texto'];
    $ruta_archivo = $_POST['ruta'];
    file_put_contents($ruta_archivo, $texto);

    echo "El archivo fue guardado correctamente!";
?>