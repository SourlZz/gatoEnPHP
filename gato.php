<?php 
include "class/sql.php";
include "class/gato.php";
$g = new gato();
$id = isset($_GET["id"])?$_GET["id"] : "";
$clave = isset($_GET["clave"])?$_GET["clave"] : "";
    //muestra partida
$linea = $g->mostrar($id);

$url = "gato.php?id=" . $id . "&clave=" . $clave ."&r=" . rand();
$meta ='<meta http-equiv="refresh" content="3" url="' . $url. '">';

$estado = $g->metodEstado($id);
$compara = $clave == "x"? 1: 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    if($estado != $compara)
    {
        echo $meta;
    }
     
    ?>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .f {
            width: 100px;
            height: 100px;
        }

        .bloqueo
        {
            width: 100%;
            height: 500px;
            /* background-color: teal; */
            position: absolute;
            z-index: 1;
        }
    </style>
</head>

<body>
<?php
    if($estado != $compara)
    {
        echo '<div class="bloqueo"></div>';
    }
     
    ?>
    
    <div class="container">
        <?php echo $linea ?>
    </div>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script>
        var estado = "0";
        (function (){
            $("#btn1").click(function (){
                enviaTiro(1);
                estado = estado == "0"?"x": "0";
                $(this).html(' <img src="img/' + estado + '.svg" class="f" />');
                $(this).prop('disabled', true);
            });
            $("#btn2").click(function (){
                enviaTiro(2);
                estado = estado == "0"?"x": "0";
                $(this).html(' <img src="img/' + estado + '.svg" class="f" />');
                $(this).prop('disabled', true);
            });
            $("#btn3").click(function (){
                enviaTiro(3);
                estado = estado == "0"?"x": "0";
                $(this).html(' <img src="img/' + estado + '.svg" class="f" />');
                $(this).prop('disabled', true);
            });
            $("#btn4").click(function (){
                enviaTiro(4);
                estado = estado == "0"?"x": "0";
                $(this).html(' <img src="img/' + estado + '.svg" class="f" />');
                $(this).prop('disabled', true);
            });
            $("#btn5").click(function (){
                enviaTiro(5);
                estado = estado == "0"?"x": "0";
                $(this).html(' <img src="img/' + estado + '.svg" class="f" />');
                $(this).prop('disabled', true);
            });
            $("#btn6").click(function (){
                enviaTiro(6);
                estado = estado == "0"?"x": "0";
                $(this).html(' <img src="img/' + estado + '.svg" class="f" />');
                $(this).prop('disabled', true);
            });
            $("#btn7").click(function (){
                enviaTiro(7);
                estado = estado == "0"?"x": "0";
                $(this).html(' <img src="img/' + estado + '.svg" class="f" />');
                $(this).prop('disabled', true);
            });
            $("#btn8").click(function (){
                enviaTiro(8);
                estado = estado == "0"?"x": "0";
                $(this).html(' <img src="img/' + estado + '.svg" class="f" />');
                $(this).prop('disabled', true);
            });
            $("#btn9").click(function (){
                enviaTiro(9);
                estado = estado == "0"?"x": "0";
                $(this).html(' <img src="img/' + estado + '.svg" class="f" />');
                $(this).prop('disabled', true);
            });
        })();

        function enviaTiro(index)
        {
            var clave = "<?php echo $clave; ?>";
            var id = "<?php echo $id; ?>";
            var url = "procesos.php?tipo=3&id=" + id + "&nom=&valor=" + clave + "&index=" + index+  "&r=" +  Math.random();
             
            console.log(url);
            $.ajax({url: url, success: function(result){
                //$("#formulas").html(result);
                location.href = "gato.php?id=" + id + "&clave=" + clave + "&r=" +  Math.random();
            }});
        }

    </script>
</body>

</html>