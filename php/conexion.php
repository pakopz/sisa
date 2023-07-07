<?php
$host="localhost";
$user="root";
$password="";
$db="seguimiento";
$con = new mysqli($host,$user,$password,$db);

$conexion = mysqli_connect($host, $user, $password, $db);
$conexion->query("SET NAMES 'utf8'");
if(mysqli_connect_errno()){
	echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
}

?>
