<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Mithril Area</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="col-12 row text-center">
<?php
include 'header.html';
?>
<form action="connection.php" method="post" class="oskour">
  <div class="aled">
    <label for="login">Entrer votre nom: </label>
    <input type="text" name="login" pattern="[A-Za-z -' ]{1,50}" id="login" required>
  </div>
  <div class="aled">
    <label for="password">Entrer votre mot de passe: </label>
    <input type="password" name="password" id="password" required>
  </div>
  <div class="aled">
    <input type="submit" value="Connexion">
  </div>
</form>
</body>
</html>