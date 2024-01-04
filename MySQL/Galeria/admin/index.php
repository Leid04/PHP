<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Formulario con Bootstrap</title>

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row justify-content-center">
          <?php
            $page = $_GET['page'];
            switch($page){
              case 'login': 
                include "includes/login.inc.php";
                break;
              case 'new': 
                include "includes/new.inc.php";
                break;
            }
          ?>
        </div>
    </div>
  </body>
</html>