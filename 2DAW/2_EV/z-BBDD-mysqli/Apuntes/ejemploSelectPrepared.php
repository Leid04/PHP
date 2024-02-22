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

/* prepare statement */
$stmt = $conn->prepare("SELECT Code, Name FROM Country ORDER BY Name LIMIT 5");
$stmt->execute();

/* bind variables to prepared statement */
$stmt->bind_result($col1, $col2);

/* fetch values */
while ($stmt->fetch()) {
    printf("%s %s\n", $col1, $col2);
}
$stmt->close();
$conn->close();