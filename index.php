<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mithril area</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="col-12 row">
<?php
include 'header.html';
?>
<main class="col-12 text-center">
    <?php
session_start();
if (!isset($_POST['name']) || !isset($_POST['gender']) || !isset($_POST['race'])) {
    if (isset($_SESSION['login'])) {
        echo "Greetings, " . $_SESSION['login'] . "<br>";
    } else {
        echo "Greetings, stranger.<br>";
    }
    echo "Please, tell me who you are.<br>";
    include 'fiche_form.html';
} else {
    include 'visu.php';
}


?>
</main>
<?php
include 'footer.html';
?>
</body>
</html>

