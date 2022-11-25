<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
session_start();
if (!isset($_POST['name']) || !isset($_POST['gender']) || !isset($_POST['race'])) {
    if (isset($_SESSION['login'])) {
        echo "Greetings, " . $_SESSION['login'];
    } else {
        echo nl2br("Greetings, stranger.\r\n");
    }
    echo nl2br("Please, tell me who you are.\r\n");
    include 'fiche_form.html';
} else {
    include 'visu.php';
}


?>
</body>
</html>

