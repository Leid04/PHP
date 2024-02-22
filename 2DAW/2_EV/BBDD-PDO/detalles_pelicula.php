<?php
  //Para probar:
  //http://localhost/PHP/2DAW/2_EV/BBDD-PDO/detalles_pelicula.php?id_pelicula=5
  $dsn = 'mysql:host=localhost;dbname=pelis';
  $user = 'denys';
  $pass = 'denys';

  try {
    $pdo = new PDO($dsn, $user, $pass);

    if (!empty($_GET['id_pelicula'])) {
      $id_pelicula = $_GET['id_pelicula'];

      $datos = [':id' => $id_pelicula];
      $query = "
        SELECT p.titulo, p.anio_estreno, g.nombre_genero, p.duracion_minutos
        FROM pelicula p
        JOIN peliculaInterprete pi ON pi.id_pelicula = p.id_pelicula
        JOIN interprete i ON pi.id_interprete = i.id_interprete
        JOIN genero g on p.id_genero = g.id_genero
        WHERE p.id_pelicula = :id 
      ";
      
      $statement = $pdo->prepare($query);
      $statement->execute($datos);

      $pelicula = $statement->fetch(PDO::FETCH_ASSOC);

      if ($pelicula) {
        echo "<h2>Película: {$pelicula['titulo']}</h2>";
        echo "<p>Año de estreno: {$pelicula['anio_estreno']}</p>";
        echo "<p>Género: {$pelicula['nombre_genero']}</p>";
        echo "<p>Duración: {$pelicula['duracion_minutos']} minutos</p>";

        $query = "SELECT i.nombre_actor 
                  FROM interprete i
                  JOIN PeliculaInterprete pi on i.id_interprete = pi.id_interprete
                  WHERE pi.id_pelicula = :id";
        
        $statement = $pdo->prepare($query);
        $statement->execute($datos);
        
        $interpretes = $statement->fetchAll(PDO::FETCH_COLUMN);

        if ($interpretes) { echo "<p>Intérpretes: " . implode(', ', $interpretes) . "</p>"; } 
        else { echo "<p>Intérpretes: no encontrados</p>";}

      } else { echo "<p>Detalles de película no encontrados.</p>";}
    } else { echo "<p>No proporcionaste id.</p>"; }
  } catch (PDOException $e) { echo "Error de conexión: " . $e->getMessage(); }
?>
