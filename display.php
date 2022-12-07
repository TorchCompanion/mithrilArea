<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display - Mithril area</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="col-12 row">
<?php
include 'header.html';
?>
<main class="col-12 text-center">
<?php
session_start();
if (!isset($_SESSION['id'])){
    echo "You are not logged in. Please log in to access this page.";
    echo "<a href='login.php'>Log in</a>";
    }
else {

$db = new PDO('mysql:host=localhost;dbname=mithrilarea;charset=utf8', 'root', '');
$sqlQuery = "SELECT name, lastName, age, gender, race, alignment, background, height, weight, hair, skin, eyes, distinctiveSigns, description, health, mana, stamina, strength, dexterity, 
intelligence, faith, perception, charisma, reflex, id_Fiche
                    FROM SHEETS
                    WHERE id_User = '" . $_SESSION['id'] . "'";
$requete = $db->prepare($sqlQuery);
$requete->execute();
$result = $requete->fetchAll();

echo "Your sheets : <br>";
echo "<form action='modif.php' method='get'>";
for($i = 0, $iMax = count($result); $i < $iMax; $i++) {
    echo '<li><a href="modif.php?id=' . $result[$i]['id_Fiche'] . '">' . $result[$i]['name'] . ' ' . $result[$i]['lastName'] . '</a></li>';
}
echo "</ul>";
?>
</main>
<?php
include 'footer.html';
?>
</body>
</html>
<?php
}