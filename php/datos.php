<?php

include("conexion.php");

$aula = $_POST['aula'];
$edificio = $_POST['edificio'];
$incidencia = $_POST['incidencia'];
$observacion = $_POST['observacion'];

// Validación y saneamiento de datos
$aula = mysqli_real_escape_string($conexion, $aula);
$edificio = mysqli_real_escape_string($conexion, $edificio);
$incidencia = mysqli_real_escape_string($conexion, $incidencia);
$observacion = mysqli_real_escape_string($conexion, $observacion);

$sql = "INSERT INTO reporte (aula, edificio, incidencia, observacion) VALUES ('$aula', '$edificio', '$incidencia', '$observacion')";

if (mysqli_query($conexion, $sql)) {
    header("location: ../index.php");
} else {
    echo "Error al insertar datos: " . mysqli_error($conexion);
}

mysqli_close($conexion);

?>