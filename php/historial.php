<?php
    // Tu código PHP para conectarte a la base de datos y ejecutar la consulta
    include('conexion.php');

    // Consulta SQL
    $sql = "SELECT * FROM reporte";

    // Ejecutar consulta y obtener resultado
    $resultado = mysqli_query($conexion, $sql);

    // Verificar si hay resultados
    if (mysqli_num_rows($resultado) > 0) {
        // Recorrer los resultados y mostrar los datos
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo '<div class="container">';
            echo '<link href="/css/bootstrap.min.css" type="text/css" rel="stylesheet">';
            echo '<div class="row">';
            echo '<div class="col-md-12">';
            echo '<form action="php/insercionDocumento.php" method="POST">';
            echo '<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">';
            echo '<div class="card-header" id="id_reporte" name="id_reporte">ID_REPORTE: ' . $fila["id_reporte"] . '</div>';
            echo '<div class="card-body">';
            echo '<p class="text-light" id="edificio" name="edificio">Edificio: ' . $fila["edificio"] . '</p>';
            echo '<p class="text-light" id="aula" name="aula">Aula: ' . $fila["aula"] . '</p>';
            echo '<p class="text-light" id="incidencia" name="incidencia">Incidencia: ' . $fila["incidencia"] . '</p>';
            echo '<p class="text-light" id="observacion" name="observacion">Observacion: ' . $fila["observacion"] . '</p>';
            // ... Agrega más campos según tu tabla
            echo '<button type="submit" class="btn btn-success">Descargar PDF</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '<br>';
        }

    } else {
        echo '<div class="container">';
        echo '<link href="/css/bootstrap.min.css" type="text/css" rel="stylesheet">';
        echo '<div class="row">';
        echo '<div class="col-md-12">';
        echo '<p class="text-light">No se encontraron resultados.</p>';

    }

// Cerrar la conexión
mysqli_close($conexion);
?>