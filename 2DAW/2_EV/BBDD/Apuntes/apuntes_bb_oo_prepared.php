<?php
require_once ("config.php");

//Conectarse a una base de datos
$conn = new mysqli(BBDD_HOST, BBDD_USER, BBDD_PASSWORD, BBDD_NAME);

// connect_errno: variable con el número de error que da al conectarse
// si es 0, no hay error, si es diferente de 0 no se ha podido conectar
if ($conn->connect_errno) {
    // connect_error: string con el mensaje de error
	echo "Fallo de conexión: " . $conn->connect_error ;
	exit;
}

$user_name = htmlspecialchars($_GET["username"]);
$user_id = htmlspecialchars($_GET["id"]);

// PASO 1: Preparar la query
$miquery = "SELECT id, nickname, name FROM user WHERE nickname = ? AND id = ?";
$stmt = $conn->prepare($miquery);

// PASO 2: Dar valor a cada ?
$stmt->bind_param("si", $user_name, $user_id);

// PASO 3: Ejecutar la query
$resultado_preparado = $stmt->execute();

//Obterner el resultado
if ($resultado_preparado) {
	$result = $stmt->get_result();
	while ($fila = $result->fetch_assoc()) {
		echo "{$fila['id']} - {$fila['nickname']} {$fila['name']} <br/>";	
    }
	echo "Encontrados:" .$result->num_rows;
} else {
	echo "Se ha producido un error";
}

echo " Filas afectadas:". $conn->affected_rows;


$result->close();
//Cerramos la conexión
$conn->close();
