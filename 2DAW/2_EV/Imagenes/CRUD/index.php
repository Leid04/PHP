<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    /* Custom styles */
    .modal-header {
      background-color: #007bff;
      color: white;
    }

    .modal-title {
      margin-bottom: 0;
      line-height: 1.5;
    }

    .modal-body {
      padding: 2rem;
    }

    .btn-register {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-register:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }

    .btn-action {
      min-width: 70px;
    }
  </style>
</head>
<body>

<?php
  require_once('./config.php');
  $sql = $pdo->query("SELECT id, photo FROM user ");
?>
<div class="container mt-5">
  <div class="row">
    <div class="col-lg-8 mx-auto">
      <div class="card">
        <div class="card-header bg-dark text-white">
          <h5 class="mb-0">Lista de Registros</h5>
        </div>
        <div class="card-body">
          <div class="d-flex justify-content-end mb-3">
            <button type="button" class="btn btn-primary btn-register" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Registrar
            </button>
          </div>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Foto</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php while($datos = $sql->fetch(PDO::FETCH_OBJ)){ ?>
              <tr>
                <th scope="row"><?= $datos->id ?></th>
                <td scope="row">
                  <img src="<?= $datos->photo ?>" alt="" width="80">
                  
                </td>
                <td>
                  <a href="#" class="btn btn-warning btn-action">Editar</a>
                  <a href="#" class="btn btn-secondary btn-action">Eliminar</a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="./registrar.php" enctype="multipart/form-data" method="POST">
          <div class="mb-3">
            <label for="formFile" class="form-label">Seleccionar Foto</label>
              <input class="form-control mb-2" type="file" name="imagen">
          </div>
          <div class="d-grid gap-2">
            <button type="submit" value="Registrar" name="btnregistrar" class="btn btn-primary btn-register">Registrar</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-r7ZziO1bQbLO05woeRI5XyOEYwcvJz8nI6IQooxBtk9kivysZgaGJmZ2dtWcEwAg"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
