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

/* Buscamos todos los usuarios llamados Lucas */
$name = "Lucas";
$stmt = $conn->prepare("SELECT username, nickname FROM 
user where name = ?");
$stmt->bind_param("s", $name);
$stmt->execute();

/* Asociamos los campos recuperados a variables */
$stmt->bind_result($username, $nickname);

/* Recuperamos todos los usuarios llamados Lucas */
while ($stmt->fetch()) {
    echo "Username: $username y nickname: $nickname";
}
$stmt->close();
$conn->close();