<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
  <div class="container">
    <h1>Google reCAPTCHA</h1>
    <form action="action.php" method="post">
      <input type="text" name="name" id="name" placeholder="Enter Name" required>
      <div class="g-recaptcha" data-sitekey="6Lcg5YopAAAAAIEc06aGs0mq-KIe89FFhTcTyhQg"></div>
      <button type="submit" name="submit_btn">Submit</button>
    </form>
  </div>
</body>
</html>