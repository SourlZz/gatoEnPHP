<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugador 1</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row">
        <div class="col-12 text-center"><h3>Jugador 1</h3></div>
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nom">
                        </div>
                        <div class="mb-3 d-grid">
                            <button type="submit" class="btn btn-primary" onclick="crearJugador1()">Crear</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script>
        function crearJugador1() {
    var nom = $("#nom").val();
    var url = "procesos.php?tipo=1&nom=" + nom + "&r=" + Math.random();

    $.ajax({
        url: url,
        success: function (result) {
            // Abrir una nueva ventana para que el jugador 2 ingrese su nombre
            var nuevaVentana = window.open("jugador2.php?id=" + result, "_blank");
            nuevaVentana.focus();
            // Redireccionar al juego
            location.href = "gato.php?id=" + result + "&clave=x&r=" + Math.random();
        }
    });
}


    </script>
</body>

</html>
