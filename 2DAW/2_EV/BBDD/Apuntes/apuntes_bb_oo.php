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
$miquery = "SELECT id, nickname, name FROM user WHERE nickname like '%$user_name%'";

if ($result = $conn->query($miquery)) {
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
