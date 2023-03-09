<?php
if (isset($_GET['file'])) {
    if (is_dir($_GET['file'])) {
        if (rmdir($_GET['file'])) {
            header('Location: index.php');
            exit;
        } else {
            exit('El directorio debe estar vacio');
        }
    } else {
        unlink($_GET['file']);
        header('Location: index.php');
        exit;
    }
} else {
    exit('Peticion Invalida!');
}
?>