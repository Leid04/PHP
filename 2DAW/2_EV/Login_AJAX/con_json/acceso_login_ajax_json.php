<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión con Ajax</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
	$(document).ready(function(){
    $('#loginForm').submit(function(e){
        e.preventDefault();
		$('#loginForm').hide();
        var email = $('#email').val();
        var password = $('#password').val();

        $.ajax({
            type: 'POST',
            url: 'login_ajax_json.php',
            data: {
                email: email,
                password: password
            },
            dataType: 'json', // Especifica que esperamos datos JSON como respuesta
            success: function(response){
                if (response.success) {
					$('#titulo').text("Bienvenido/a");
                    $('#result').html('Inicio de sesión exitoso. Hola, ' + response.nombre);
                } else {
					$('#loginForm').show();
                    $('#result').html('Inicio de sesión fallido. ' + response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error("Error en la solicitud Ajax:", error);
            }
        });
    });
});
</script>
</body>
</html>