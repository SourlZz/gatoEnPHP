<?php 
include "class/sql.php";
include "class/gato.php";
$g = new gato();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-12"></div>
            <div class="col-sm-4 col-12 mt-3 d-grid">
                <button type="button" class="btn btn-primary" onclick="btn1()">Crear Partida</button>
            </div>
            <div class="col-sm-4 col-12"></div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php 
                echo $g->listarPartidas();
                ?>
            </div>
        </div>
    </div>
    <script>
        function btn1()
        {
            location.href = "jugador.php?r=" +Math.random();
        }

        function abrirPartida(id)
        {
            location.href = "jugador2.php?r=" +Math.random();
        }
    </script>
</body>

</html>