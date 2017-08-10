<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include 'conexion.php';
$db->freeze(false);
// $db->nuke();
$persona = $db->dispense("persona");

$nombre = $_POST["nombre"];
$documento = $_POST["documento"];

$persona->nombre = $nombre;
$persona->documento = $documento;

$db->store($persona);


echo "se ha guardado la persona.";

