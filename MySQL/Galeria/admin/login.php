<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<div class="col-md-6">
  <h2 class="text-center mb-4">Registrese</h2>
  <form action="./autentificacion.php" method="post">
      <div class="mb-3">
          <label for="email" class="form-label">Correo Electrónico:</label>
          <input type="email" class="form-control" name="email" placeholder="Ingrese su correo electrónico">
      </div>
      <div class="mb-3">
          <label for="password" class="form-label">Contraseña:</label>
          <input class="form-control" name="password" rows="4" placeholder="Contraseña"></input>
      </div>
      <a class="btn btn-lg btn-warning" href="index.php?page=new">Alta nuevo autor</a>
      <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>