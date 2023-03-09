<?php
  $ruta = $_GET['file'];
?>

<script>
  function borrarInformacion() {
    document.getElementById("texto").value = "";
  }
</script>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bloc de Notas</title>
    <link rel="shortcut icon" href="assets/img/icono_notepad.webp" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="assets/js/jquery-3.6.3.min.js"></script>
    <script src="assets/js/index.js" defer></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  </head>
  <body class="mt-1">
    <header>   
      <div class="upper-top d-inline-flex justify-content-between w-100 h-20 bg-light">
          <div class="container-fluid pt-3 px-4">
            <a class="navbar-brand" href="#">
            <img src="assets/img/icono_notepad.webp" width="30px" height="30px" class="d-inline-block align-top" alt="">
            Bloc de Notas
              </a>
          </div>

          <div class="upper-right d-flex p-3 g-3">
            <span class="material-symbols-outlined" role="button">horizontal_rule</span>
            <span class="material-symbols-outlined" role="button">check_box_outline_blank</span>
            <span class="material-symbols-outlined" role="button">close</span>
          </div>
      </div>

      <nav class="navbar navbar-expand-sm bg-light px-3" style="margin-top: -15px;"> 
      <div class="lower-left-nav d-inline-flex">
          <ul class="navbar-nav px-2">
            <li class="nav-link text-dark" role="button" onClick="enviarDatos(texto)">Guardar</li>
            <li class="nav-link text-dark" role="button" onClick="borrarInformacion()">Borrar</li>
          </ul>
        </div>
      </nav>  
    </header>

    <main class="container-fluid pt-1">
      <textarea name="texto" rows="32" id="texto" class="form-control"><?php echo htmlentities(file_get_contents($ruta));?></textarea>
    </main>
    
  </body>
</html>
