<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página de búsqueda de ejemplares</h1>
    <form action="resultados.php" method="get">
    <p>Introduce el título/autor/isbn para buscar</p><br><br>
        <label for="titulo">Introduce el título: </label>
            <input type="text" name="titulo" placeholder="titulo"><br>
        <label for="autor">Introduce el autor: </label>
            <input type="text" name="autor" placeholder="autor"><br>
        <label for="isbn">Introduce el isbn: </label>
            <input type="text" name="isbn" placeholder="isbn" pattern="[A-Za-z]{13}"><br>

        <button type="submit">Buscar</button>
    </form>
</body>
</html>