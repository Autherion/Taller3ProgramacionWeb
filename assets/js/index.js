function enviarDatos(datos) {
    //le tuve que hacer decode 2 veces quien sabe porque
    const queryString = decodeURIComponent(decodeURIComponent(window.location.search));
    const urlParams = new URLSearchParams(queryString);
    let ruta = urlParams.get('file');

    var texto = {
        'texto': datos.value,
        'ruta': ruta
       };

    $.ajax({
        type: "post",
        url: "guardar.php",
        data: texto,
        complete: function(respuesta) {
            if (respuesta == "success"){
                alert(data.success);
            }
        }
    });
  }
