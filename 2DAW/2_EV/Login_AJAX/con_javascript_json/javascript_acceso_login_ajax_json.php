<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión con Ajax</title>
</head>
<body>
    <h2 id="titulo">Iniciar Sesión</h2>
    <form id="loginForm">
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Iniciar Sesión">
    </form>
    <div id="result"></div>
<script>	
//Sacar a un js externo
	document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('loginForm').addEventListener('submit', function(e) {
        e.preventDefault();
		document.getElementById('loginForm').style.display = 'none';
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'login_ajax_json.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                try {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        document.getElementById('titulo').innerText = "Bienvenido/a";
                        document.getElementById('result').innerHTML = 'Inicio de sesión exitoso. Hola, ' + response.nombre;
                    } else {
                        document.getElementById('loginForm').style.display = 'block';
                        document.getElementById('result').innerHTML = 'Inicio de sesión fallido. ' + response.message;
                    }
                } catch (error) {
                    console.error("Error en el manejo de la respuesta JSON:", error);
                }
            }
        };

        xhr.send('email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password));
    });
});
</script>
</body>
</html>