<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio</title>
</head>
<body>
    <form action="salida.php" method="post">
        <label for="name">Name: </label>
            <input type="text" name="name" pattern="[A-Za-záéíóúñÁÉÍÓÚÑ]{2,20}"><br><br>

        <label for="gen">Gender: </label><br>
            <input type="radio" name="gen" value="Male">Male<br>
            <input type="radio" name="gen" value="Female">Female<br><br>
        
        <label for="subjects[]">Subjects: </label><br><br>
            <input type="checkbox" name="subjects[]" value="PHP">PHP<br>
            <input type="checkbox" name="subjects[]" value="JS">JS<br>
            <input type="checkbox" name="subjects[]" value="CSS">CSS<br><br>


        <label for="grade">Grade:</label>
            <select name="grade" id="grade">
                <option value="First">First</option>
                <option value="Second">Second</option>
            </select><br><br>


        <label for="activities">Extra activities: </label>
            <select name="activities[]" id="activities" multiple>
                <option value="HTML">HTML</option>
                <option value="Boostrap">Boostrap</option>
                <option value="WordPress">WordPress</option>
            </select><br><br>

        <input type="hidden" name="code" value="1452151">
    
        <label for="password">Password: </label>
            <input type="password" name="password" pattern="{5,10}"><br><br>

        <label for="comments">Comments: </label>
            <input type="textarea" name="Comments: " rows="4" cols="50"><br><br>


        <label for="age">Age: </label>
            <input type="Number" name="age" pattern="[0-9]"><br><br>

        <label for="interest_level">Interest Level (1-10):</label>
            <input type="range" name="interest_level" min="1" max="10"><br><br>

        <label for="phone">Phone: </label>
            <input type="tel" name="phone"><br><br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>