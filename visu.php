<?php
$name = $_POST['name'];
try {
    if (isset($_POST['name'], $_POST['gender'], $_POST['race'])) {
        echo "<h1>Is this who you are?</h1><br>";
        echo "<form>";
        echo '<input type="hidden" name="name" id="name" value="' . $_POST['name'] . '">Name: ' . $_POST['name'] . '<br>';
        echo '<input type="hidden" name="lastname" id="lastname" value="' . $_POST['lastname'] . '">Last Name: ' . $_POST['lastname'] . '<br>';
        echo '<input type="hidden" name="age" id="age" value="' . $_POST['age'] . '">Age: ' . $_POST['age'] . '<br>';
        echo '<input type="hidden" name="gender" id="gender" value="' . $_POST['gender'] . '">Gender: ' . $_POST['gender'] . '<br>';
        echo "Race: " . $_POST['race'] . "<br>";
        echo "Alignment: " . $_POST['alignment'] . "<br>";
        echo "Background: " . $_POST['background'] . "<br>";
        echo "Height: " . $_POST['height'] . "<br>";
        echo "Weight: " . $_POST['weight'] . "<br>";
        echo "Hair: " . $_POST['hair'] . "<br>";
        echo "Skin: " . $_POST['skin'] . "<br>";
        echo "Eyes: " . $_POST['eyes'] . "<br>";
        echo "Distinctive signs: " . $_POST['distinctivesigns'] . "<br>";
        echo "Health: " . $_POST['health'] . "<br>";
        echo "Mana: " . $_POST['mana'] . "<br>";
        echo "Stamina: " . $_POST['stamina'] . "<br>";
        echo "Strength: " . $_POST['strength'] . "<br>";
        echo "Dexterity: " . $_POST['dexterity'] . "<br>";
        echo "Intelligence: " . $_POST['intelligence'] . "<br>";
        echo "Faith: " . $_POST['faith'] . "<br>";
        echo "Perception: " . $_POST['perception'] . "<br>";
        echo "Charisma: " . $_POST['charisma'] . "<br>";
        echo "Reflex: " . $_POST['reflex'] . "<br>";
    }
} catch (Exception $e) {
    die("Erreur: " . $e->getMessage());
}
