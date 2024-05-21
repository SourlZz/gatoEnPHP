<?php
session_start(); // Iniciar sesión para usar variables de sesión
include "class/sql.php";
include "class/gato.php";

$tipo = isset($_GET["tipo"]) ? $_GET["tipo"] : "";
$g = new gato();

if ($tipo == 1) {
    // Crear jugador 1
    $nom = isset($_GET["nom"]) ? $_GET["nom"] : "";

    // Crear la partida y obtener el ID
    $partida_id = $g->crearJugador1($nom);

    // Almacenar el ID de la partida en una variable de sesión
    $_SESSION['partida_id'] = $partida_id;

    echo $partida_id;
} elseif ($tipo == 2) {
    // Crear jugador 2
    $id = isset($_SESSION["partida_id"]) ? $_SESSION["partida_id"] : 0;
    $nom = isset($_GET["nom"]) ? $_GET["nom"] : "";

    $g->crearJugador2($id, $nom);
} elseif ($tipo == 3) {
    // Tiro
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $nom = isset($_GET["nom"]) ? $_GET["nom"] : "";
    $valor = isset($_GET["valor"]) ? $_GET["valor"] : "";
    $index = isset($_GET["index"]) ? $_GET["index"] : "";

    $g->tiro($id, $nom, $valor, $index);
} elseif ($tipo == 4) {
    // Mostrar partida
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    echo $g->mostrar($id);
} elseif ($tipo == 5) {
    // Listar partidas
    echo $g->listarPartidas();
}
?>

?>