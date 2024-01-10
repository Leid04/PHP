<?php
require_once "functions.php";
if ($_SERVER["REQUEST_METHOD"] =="POST") {
	$email = limpiar($_POST['email']);
	$pass = limpiar($_POST['password']);
		 
	if (!empty($email) && !empty($pass)) {
		$pass = md5($pass);
		$fichero_login = fopen("./files/users_aula_virtual.csv", "r");
		if ($fichero_login === FALSE) {
			$errors[] = "No se pudo abrir el fichero";
		} else while (!feof ($fichero_login)) {
				 $linea = fgetcsv($fichero_login);
				 $fid = limpiar($linea[0]);
				 $femail = limpiar($linea[1]);
				 $fpass = limpiar($linea[2]);
				 $fnombre = limpiar($linea[3]);
				 $fapellido = limpiar($linea[4]);
				 $fperfil = limpiar($linea[5]);
				 if (($femail == $email)&&($fpass == $pass)) {
					$user["email"] = $femail;
					$user["id"] = $fid;
					$user["nombre"] = "$fnombre $fapellido";
					$user["nperfil"] = $fperfil;
					$user["perfil"] = ($fperfil==1?"Profesor":"Estudiante");
					session_start();
					$_SESSION["usuario"] = $user;
					break;
				 } 
			 }
			 if (empty($user)) {
				 $errors[] = "El email y/o la contraseña son incorrectos.";
			 }
		 } else {
			 $errors[] = "Por favor, introduzca correo y contraseña.";
		 }
	} 


if(empty($errors)){
    echo 'Inicio de sesión exitoso.';
} else {
    echo 'Inicio de sesión fallido. Verifica tu usuario y contraseña.';
}
?>
