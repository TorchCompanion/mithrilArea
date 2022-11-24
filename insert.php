<?php
try {
    if (isset($_POST['name'], $_POST['gender'], $_POST['race'])) {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $race = $_POST['race'];
        $alignment = $_POST['alignment'];
        $background = $_POST['background'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $hair = $_POST['hair'];
        $skin = $_POST['skin'];
        $eyes = $_POST['eyes'];
        $distinctivesigns = $_POST['distinctivesigns'];
        $health = $_POST['health'];
        $mana = $_POST['mana'];
        $stamina = $_POST['stamina'];
        $strength = $_POST['strength'];
        $dexterity = $_POST['dexterity'];
        $intelligence = $_POST['intelligence'];
        $faith = $_POST['faith'];
        $perception = $_POST['perception'];
        $charisma = $_POST['charisma'];
        $reflex = $_POST['reflex'];
        $db = new PDO('mysql:host=localhost;dbname=mithrilarea;charset=utf8', 'root', '');
        $sqlQuery = "INSERT INTO fiche 
                   (name, 
                   lastName, 
                   age, 
                   gender, 
                   race, 
                   alignment, 
                   background, 
                   height, 
                   weight, 
                   hair, 
                   skin, 
                   eyes, 
                   distinctiveSigns, 
                   health, 
                   mana, 
                   stamina, 
                   strength, 
                   dexterity, 
                   intelligence, 
                   faith, 
                   perception, 
                   charisma, 
                   reflex) 
VALUES ('$name', '$lastname', '$age', '$gender', '$race', '$alignment', '$background', '$height', '$weight', '$hair', '$skin', '$eyes', '$distinctivesigns', '$health', '$mana', '$stamina', '$strength', '$dexterity', '$intelligence', '$faith', '$perception', '$charisma', '$reflex')";
        $requete = $db->query($sqlQuery);
    }
} catch (Exception $e) {
    die("Erreur: " . $e->getMessage());
}