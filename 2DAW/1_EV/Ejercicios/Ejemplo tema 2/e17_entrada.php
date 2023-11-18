<!DOCTYPE html>
<html lang="es">
<head>
	<title>Laura Pérez</title>
	<meta charset="UTF-8">
	<meta name="author" content="Laura Pérez">
	<meta name="description" content="formularios">
</head>
<body>
<form action="e17_salida.php" method="get">
	<label for="textNombre">Nombre</label>
	<input type="text" name="nombre" id="textNombre">
	<label for="selIdioma">Idioma</label>
	<select name="idioma" id="selIdioma">
		<option value="inglés">Ingl&eacute;s</option>
		<option value="francés">Franc&eacute;s</option>
		<option value="español">Espa&ntilde;ol</option>
	</select>
	<label for="selAsignatura">Curso</label>

	<select name="asignaturas[]" id="selAsignatura" multiple>
		<option value="DWES">DWES</option>
		<option value="DWEC">DWEC</option>
		<option value="DI">DI</option>
	</select>
	
	
	
	
	
	
	<input type="submit">
</form>
</body>
</html>