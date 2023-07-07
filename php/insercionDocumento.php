<?php

include ('conexion.php');

//Función para escapar los caracteres especiales y evitar inyección de SQL
function escape($conexion, $string) {
    return $conexion->real_escape_string($string);
}

//Actualizacion (UPDATE)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $id_reporte = escape($conexion, $_POST["id_reporte"]);
    $aula = escape($conexion, $_POST["aula"]);
    $edificio = escape($conexion, $_POST["edificio"]);
    $incidencia = escape($conexion, $_POST["incidencia"]);
    $observacion = escape($conexion, $_POST["observacion"]);
    
    $sql = "UPDATE documento SET aula='$aula', edificio='$edificio', incidencia='$incidencia', observacion='$observacion' WHERE id_reporte=$id_reporte";
    
    if ($conexion->query($sql) === TRUE) {
        // header("location: ../php/ejemplo.php");
        echo "Registro actualizado exitosamente.";
    } else {
        echo "Error al actualizar el registro: " . $conexion->error;
    }
}

//Cerrar conexión
$conexion->close();
?>