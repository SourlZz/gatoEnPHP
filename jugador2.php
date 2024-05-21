<?php 
session_start();
$id_partida = isset($_SESSION["partida_id"]) ? $_SESSION["partida_id"] : 0; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugador 2</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center"><h3>Jugador 2</h3></div>
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nom">
                        </div>
                        <div class="mb-3 d-grid">
                            <button type="submit" class="btn btn-primary" onclick="crearJugador2()">Crear</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script>
        function crearJugador2() {
    var nom = $("#nom").val();
    var id = "<?php echo $_GET['id']; ?>";
    var url = "procesos.php?tipo=2&nom=" + nom + "&id=" + id + "&r=" + Math.random();

    $.ajax({
        url: url,
        success: function (result) {
            // Redirigir al juego del gato
            window.location.href = "gato.php?id=" + id + "&clave=0&r=" + Math.random();
        }
    });
}



    </script>
</body>

</html>
