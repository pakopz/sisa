<?php include "sesion.php"; ?>
<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Registro</title>
    </head>
    <body>
      <?php include("php/navbar.php"); ?>
        <!-- Registro -->
        <div class="container text-center">
            <div class="row">
                <div class="col">
                </div>
                <div class="col-6">
                    <form action="php/registro.php" method="post">
                        <div class="form-group">
                            <label class="form-label mt-4">SISSA</label>
                            <br>
                            <br>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="username" name="username" placeholder="name@example.com">
                                <label for="username">Nombre de Usuario</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="name@example.com">
                                <label for="fullname">Nombre Completo</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                                <label for="email">Correo Electronico</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Password">
                                <label for="confirm_password">Confirmar Password</label>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                          <div class="col-5">
                            <button type="submit" class="btn btn-success">Registrar</button>
                          </div>
                          <div class="col">
                            <button type="button" class="btn btn-danger" href="login.php">Cancelar</button>
                          </div>
                        </div>
                    </form>
                </div>
                <div class="col">
                </div>
            </div>
        </div>
        <script src="js/valida_registro.js"></script>
    </body>
</html>