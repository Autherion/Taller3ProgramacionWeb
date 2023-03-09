<?php
if (isset($_GET['directory'])) {
    if (isset($_POST['filename'], $_POST['type'])) {
        if (preg_match('/^[\w\-. ]+$/', $_POST['filename'])) {
            if ($_POST['type'] == 'directory') {
                mkdir($_GET['directory'] . $_POST['filename']);
            } else {
                file_put_contents($_GET['directory'] . $_POST['filename'] . ".txt", '');
            }
            if ($_GET['directory']) {
                header('Location: index.php?file=' . urlencode($_GET['directory']));
            } else {
                header('Location: index.php');
            }
            exit;
        } else {
            exit('Por favor, Introduzca un nombre valido!');
        }
    }
} else {
    exit('Directorio Invalido!');
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Carpetas Generales</title>
		<link href="assets/css/manejador.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>
	<body>
        <div class="file-manager">

            <div class="file-manager-header">
                <h1>Crear</h1>
            </div>

            <form action="" method="post">

                <label for="type">Tipo</label>
                <select id="type" name="type">
                    <option value="directory">Directorio</option>
                    <option value="file">Texto</option>
                </select>

                <label for="filename">Nombre</label>
                <input id="filename" name="filename" type="text" placeholder="Nombre" required> 

                <button type="submit">Aceptar</button>

            </form>

        </div>
    </body>
</html>