<?php
include "../configs/config.php";
include "../configs/mysql.php";
include "../configs/utils.php";

$email = htmlspecialchars(trim($_POST['email']));
$password = htmlspecialchars(trim(md5($_POST['password'])));

$conexion = Connect($bbdd['database']);

$sentencia = $conexion->prepare("SELECT email, password FROM authors WHERE email = ? AND password = ?");
if ($sentencia === false) { die("Error al preparar la sentencia: " . $conexion->error); }
$sentencia->bind_param("ss", $email, $password);

// Ejecuta la sentencia preparada
$ejecutar = Execute($sentencia);

// Vincula los resultados a variables
$sentencia->bind_result($resultEmail, $resultPassword);

// Fetch para obtener los resultados
$sentencia->fetch();

// Comprueba si se encontraron resultados
if ($ejecutar && $sentencia->num_rows > 0) {
    // Hacer algo con los datos, por ejemplo, imprimirlos
    echo "Email: $resultEmail, Password: $resultPassword";
} else {
    echo "No se encontraron resultados.";
}

$sentencia->close();
Close($conexion);
?>
