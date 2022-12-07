<?php
session_start();
try {
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $race = $_POST["race"];
    $alignment = $_POST["alignment"];
    $background = $_POST["background"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];
    $hair = $_POST["hair"];
    $skin = $_POST["skin"];
    $eyes = $_POST["eyes"];
    $distinctivesigns = $_POST["distinctive_signs"];
    $description = $_POST["description"];
    $health = $_POST["health"];
    $mana = $_POST["mana"];
    $stamina = $_POST["stamina"];
    $strength = $_POST["strength"];
    $dexterity = $_POST["dexterity"];
    $intelligence = $_POST["intelligence"];
    $faith = $_POST["faith"];
    $perception = $_POST["perception"];
    $charisma = $_POST["charisma"];
    $reflex = $_POST["reflex"];
    $id_User = $_SESSION["id"];
    $db = new PDO('mysql:host=localhost;dbname=mithrilarea;charset=utf8', 'root', '');

    $sqlQuery = "UPDATE Sheets SET 
                                name = '$name',
                                lastName = '$lastname', 
                                age = '$age', 
                                gender = '$gender', 
                                race = '$race', 
                                alignment = '$alignment', 
                                background = '$background', 
                                height = '$height', 
                                weight = '$weight', 
                                hair = '$hair', 
                                skin = '$skin', 
                                eyes = '$eyes', 
                                distinctiveSigns = '$distinctivesigns', 
                                health = '$health', 
                                mana = '$mana', 
                                stamina = '$stamina', 
                                strength = '$strength', 
                                dexterity = '$dexterity', 
                                intelligence = '$intelligence', 
                                faith = '$faith', 
                                perception = '$perception', 
                                charisma = '$charisma', 
                                reflex = '$reflex',
                                id_User = '$id_User'
                                WHERE Id_Fiche = '" . $_SESSION['id_fiche'] . "'";
    $requete = $db->query($sqlQuery);

    echo "Update successful";
    header('refresh: 3; url=../display.php');

} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}