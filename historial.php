<?php include "sesion.php"; ?>
<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Historial</title>
    </head>
    <body>
        <?php include ("nav/nav.html"); ?>
        <!-- Historial -->
        <br>
        <br>
        <br>
        <div class="row align-items-center">
            <div class="col">
            </div>
            <div class="col">
                <?php include("php/historial.php"); ?>
            </div>
            <div class="col">
            </div>
        </div>
        <script src="js/valida_registro.js"></script>
    </body>
</html>