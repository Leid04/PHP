<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Inicio de Sesión con Ajax</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form id="loginForm">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Iniciar Sesión">
    </form>
	
    <div id="result"></div>

    <script>
       $(document).ready(function(){
		$('#loginForm').submit(function(e){
			e.preventDefault();
			$('#loginForm').hide();
			var email = $('#email').val();
			var password = $('#password').val();

			$.ajax({
				type: 'POST',
				url: 'login_ajax_post.php',
				data: {
					email: email,
					password: password
				},
				success: function(response){
					$('#result').html(response);
					$('#loginForm').show();
				}
			});
		});
	});
    </script>
</body>
</html>
