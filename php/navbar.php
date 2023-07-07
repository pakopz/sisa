<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="img/iconoUTP.png" alt="Bootstrap" width="40" height="25">
        </a>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <?php if(!isset($_SESSION["user_id"])):?>
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="registro.php">Registro</a>
            </li>
            <li class="nav-item">
            <?php else:?>
                <a class="nav-link" href="php/logout.php">Salir</a>
            <?php endif;?>
            </li>
        </ul>
    </div>
</nav>