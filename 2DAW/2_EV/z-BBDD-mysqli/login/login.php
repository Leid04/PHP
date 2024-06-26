<!DOCTYPE html>
<html lang="es">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body class="bg-dark text-light">
  <div class="container mt-5">
    <form id="formulario" name="formulario" method="post" class="col-md-6 offset-md-3">
      <div class="mb-3">
        <label for="usuario" class="form-label">Usuario:</label>
        <input type="text" class="form-control" name="usuario" placeholder="Juan/juanito23">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" name="password">
      </div>
      <div class="g-recaptcha" data-sitekey="6Lcg5YopAAAAAIEc06aGs0mq-KIe89FFhTcTyhQg"></div>
      <button type="button" class="btn btn-primary" id="submitBtn">Enviar</button>
    </form>
  </div>
  <script src="./login.js"></script>
</body>

</html>