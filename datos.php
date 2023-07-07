<?php include('sesion.php'); ?>
<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>datos</title>
        <?php include('php/conexion.php'); ?>
    </head>
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script type="text/javascript">
            function obtenerSalon(val) {
                console.log("este es el valor: " + val);
                $.ajax({
                    type: "POST",
                    url: "php/obtener_aula.php",
                    data: { val: val },
                    success: function(data) {
                        $("#aula").html(data);
                    }
                });
            }
        </script>
        <!-- datos -->
        <?php include("nav/nav.html") ?>
        <br>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                </div>
                <div class="col-6">
                    <form name="form" id="form" action="php/datos.php" method="post">
                    <?php
                    $consultaEdificio = $conexion->query("select nombre as 'valor', descripcion as 'descripcion' from edificios order by id_edificio");
                    $consultaEdificio1 = $conexion->query("select nombre as 'valor', descripcion as 'descripcion' from edificios order by id_edificio");
                    ?>
                        <div class="form-group">
                            <label class="form-label mt-4">SISSA</label>
                            <br>
                            <br>
                            <div class="form-group">
                                <label for="edificio" class="form-label mt-4">Edificio:</label>
                                <select name="edificio" class="form-select" id="edificio" onChange="obtenerSalon(this.value);" required>
                                    <option value="" selected>Selecciona una opcion</option>
                                    <?php
                                    while ($row= $consultaEdificio->fetch_object())
                                    {
                                        echo "<option value='".$row->valor."'>".$row->descripcion."</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="aula" class="form-label mt-4">Aula:</label>
                                <select name="aula" class="form-select" id="aula" required>
                                    <?php
                                    include ("php/obtener_aula.php");
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="incidencia" class="form-label mt-4">Incidencia</label>
                            <input type="text" class="form-control" id="incidencia" name="incidencia">
                        </div>
                        <div class="form-group">
                            <label for="observacion" class="form-label mt-4">Observaciones</label>
                            <textarea name="observacion" class="form-control" id="observacion" rows="5"></textarea>
                        </div>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-success">Registrar</button>
                        <br>
                        <br>
                        <a href="index.php">
                            <button type="button" class="btn btn-danger">Cancelar</button>
                        </a>
                    </form>
                </div>
                <div class="col">
                </div>
            </div>
        </div>
    </body>
</html>