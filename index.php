<?php include "sesion.php"; ?>
<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>SISSA</title>
    </head>
    <body>
        <?php include("nav/nav.html"); ?>
        <!-- login -->
        <br>
        <br>
        <br>
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col">
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <div class="d-grid gap-2">
                        <a href="datos.php">
                            <button class="btn btn-lg btn-primary" type="button">Nuevo Reporte</button>
                        </a>
                        <a href="historial.php">
                            <button class="btn btn-lg btn-primary" type="button">Ver Reportes</button>
                        </a>
                    </div>
                </div>
                <div class="col">
                </div>
            </div>
        </div>
    </body>
</html>