<?php
// Establece una conexión con la base de datos
include 'conexion.php';

// Obtiene la consulta de búsqueda de la solicitud Ajax
$query = $_POST['query'];

// Prepara la declaración SQL
$statement = $connection->prepare("SELECT * FROM profesor WHERE nombre LIKE :query");
$statement->bindValue(':query', "%$query%", PDO::PARAM_STR);

// Ejecuta la consulta
$statement->execute();

// Obtiene los resultados
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

// Devuelve los resultados como JSON
echo json_encode(array('results' => $results));
?>
