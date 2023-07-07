<?php session_start(); ?>
<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Login</title>
    </head>
    <body>
        <?php include("php/navbar.php"); ?>
        <!-- login -->
        <div class="container text-center">
            <div class="row">
                <div class="col">
                </div>
                <div class="col-6">
                    <form role="form" name="login" action="php/login.php" method="post">
                        <div class="form-group">
                            <br>
                            <br>
                            <br>
                            <label class="form-label mt-4">SISSA</label>
                            <br>
                            <br>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Usuario">
                                <label for="username">Usuario</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-success">Acceder</button>
                    </form>
                    <script src="js/valida_login.js"></script>
                </div>
                <div class="col">
                </div>
            </div>
        </div>
    </body>
</html>