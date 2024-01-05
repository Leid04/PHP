<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-lett">
      <h2>Nuevo autor</h2>
    </div>    
  </div>
  <div class="row">
    <div class="col-lg-12 text-lett">
      <div class="col-lg-2 text-left"></div>
      <div class="col-lg-10 text-left">
        <form action="./accion.php" method="POST">
          <div class="mb-3">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
          </div>
          <div class="mb-3">
              <label for="email" class="form-label">Correo Electrónico:</label>
              <input type="email" class="form-control" id="email" name="email"placeholder="Ingrese su correo electrónico">
          </div>
          <div class="mb-3">
              <label for="password" class="form-label">Contraseña:</label>
              <input class="form-control" id="password" rows="4" name="password" placeholder="Contraseña"></input>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
      <div class="col-lg-2 text-left"></div>
    </div>    
  </div>
</div>