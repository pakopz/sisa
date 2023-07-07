<?php
include 'conexion.php';

if (!empty($_POST["val"])) {
    $sql = "SELECT nombre, descripcion FROM aula WHERE id_edificio = '".$_POST["val"]."'";
    $consulta_aulas = $conexion->query($sql);
    ?>

    <option value="">Seleccionar - aula</option>

    <?php
    while ($aula = $consulta_aulas->fetch_object()) {
        ?>
        <option value="<?php echo $aula->nombre; ?>"><?php echo $aula->descripcion; ?></option>
        <?php
    }
}
?>