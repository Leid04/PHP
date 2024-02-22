<?php
require_once ("config.php");

//Conectarse a una base de datos
$conn = mysqli_connect(BBDD_HOST, BBDD_USER, BBDD_PASSWORD, BBDD_NAME);

// connect_errno: variable con el número de error que da al conectarse
// si es 0, no hay error, si es diferente de 0 no se ha podido conectar
if (mysqli_connect_errno()) {
    // connect_error: string con el mensaje de error
	echo "Fallo de conexión: " . mysqli_connect_error() ;
	exit;
}

$user_name = htmlspecialchars($_GET["username"]);
$miquery = "SELECT id, nickname, name FROM user WHERE nickname like '%$user_name%'";

if ($result = mysqli_query($conn,$miquery)) {
	while ($fila = mysqli_fetch_assoc($result)) {
		echo "{$fila['id']} - {$fila['nickname']} {$fila['name']} <br/>";
    }
	echo "Encontrados:" .mysqli_num_rows($result);
} else {
	echo "Se ha producido un error";
}

echo " Filas afectadas:". mysqli_affected_rows($conn);
//Cerramos la conexión
mysqli_close($conn);
