<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="src/styles/header.css">
</head>
<body>
    <header>
        <div>
            <?php echo (empty($sesion)) ? "<p><a href='login.php'>Login</a></p>" : "<p>Hola $sesion</p>"; ?>
        </div>
    </header>
    <main><div>movidas</div></main>
    <footer>2023 - Todos los derechos reservados</footer>
</body>
</html>
