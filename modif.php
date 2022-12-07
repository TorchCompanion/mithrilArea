<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update - Mithril area</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="col-12 row">
<?php
include 'header.html';
?>
<main class="col-12 text-center">
<?php
session_start();

try {
    $_SESSION['id_fiche'] = $_GET['id'];
    $label = array('name', 'lastname', 'age', 'gender', 'race', 'alignment', 'background', 'height', 'weight', 'hair', 'skin', 'eyes',
        'distinctive_signs', 'description', 'health', 'mana', 'stamina', 'strength', 'dexterity', 'intelligence', 'faith', 'perception', 'charisma', 'reflex');
    $db = new PDO('mysql:host=localhost;dbname=mithrilarea;charset=utf8', 'root', '');
    $sqlQuery = "SELECT name, lastName, age, gender, race, alignment, background, height, weight, hair, skin, eyes, distinctiveSigns, description, health, mana, stamina, strength, dexterity, 
intelligence, faith, perception, charisma, reflex FROM Sheets WHERE id_Fiche = " . $_GET['id'];
    $requete = $db->query($sqlQuery);
    $update = $requete->fetch();
    echo '<form action="process/update.php" method="post" id="update_form">';
    for ($i = 0, $iMax = count($label); $i < $iMax; $i++) {
        echo '<label for="' . $label[$i] . '">' . ucfirst(preg_replace('/[_]/', ' ', $label[$i])) . ' : </label>';
        echo '<input type="text" name="' . $label[$i] . '" value="' . $update[$i] . '"><br>';
    }

    echo '<input type="submit" value="Update" id="but-update"><input type="button" value="Delete" id="but-Delete" onclick="Delete()"></form>';

} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>
</main>
<?php
include 'footer.html';
?>
</body>

<script>
    function Delete(){
        const response = confirm("Are you sure you want to delete this sheet?");
        document.getElementById("update_form").action = "process/delete.php";
        document.getElementById("update_form").response;
        if (response === true) {
            document.getElementById("update_form").submit();
        }
    }
</script>
</html>
