<?php
$name = $_POST['name'];
try {
    if (isset($_POST['name'], $_POST['gender'], $_POST['race'])) {
        echo '<h1>Is this who you are?</h1><br>';
        echo '<form action="insert.php" method="post">';
        echo '<input type="hidden" name="name" id="name" value="' . $_POST['name'] . '">Name: ' . $_POST['name'] . '<br>';
        echo '<input type="hidden" name="lastname" id="lastname" value="' . $_POST['lastname'] . '">Last Name: ' . $_POST['lastname'] . '<br>';
        echo '<input type="hidden" name="age" id="age" value="' . $_POST['age'] . '">Age: ' . $_POST['age'] . '<br>';
        echo '<input type="hidden" name="gender" id="gender" value="' . $_POST['gender'] . '">Gender: ' . $_POST['gender'] . '<br>';
        echo '<input type="hidden" name="race" id="race" value="' . $_POST['race'] . '">Race: ' . $_POST['race'] . '<br>';
        echo '<input type="hidden" name="alignment" id="alignment" value="' . $_POST['alignment'] . '">Alignment: ' . $_POST['alignment'] . '<br>';
        echo '<input type="hidden" name="background" id="background" value="' . $_POST['background'] . '">Background: ' . $_POST['background'] . '<br>';
        echo '<input type="hidden" name="height" id="height" value="' . $_POST['height'] . '">Height: ' . $_POST['height'] . '<br>';
        echo '<input type="hidden" name="weight" id="weight" value="' . $_POST['weight'] . '">Weight: ' . $_POST['weight'] . '<br>';
        echo '<input type="hidden" name="hair" id="hair" value="' . $_POST['hair'] . '">Hair: ' . $_POST['hair'] . '<br>';
        echo '<input type="hidden" name="skin" id="skin" value="' . $_POST['skin'] . '">Skin: ' . $_POST['skin'] . '<br>';
        echo '<input type="hidden" name="eyes" id="eyes" value="' . $_POST['eyes'] . '">Eyes: ' . $_POST['eyes'] . '<br>';
        echo '<input type="hidden" name="distinctivesigns" id="distinctivesigns" value="' . $_POST['distinctivesigns'] . '">Distinctive signs: ' . $_POST['distinctivesigns'] . '<br>';
        echo '<input type="hidden" name="health" id="health" value="' . $_POST['health'] . '">Health: ' . $_POST['health'] . '<br>';
        echo '<input type="hidden" name="mana" id="mana" value="' . $_POST['mana'] . '">Mana: ' . $_POST['mana'] . '<br>';
        echo '<input type="hidden" name="stamina" id="stamina" value="' . $_POST['stamina'] . '">Stamina: ' . $_POST['stamina'] . '<br>';
        echo '<input type="hidden" name="strength" id="strength" value="' . $_POST['strength'] . '">Strength: ' . $_POST['strength'] . '<br>';
        echo '<input type="hidden" name="dexterity" id="dexterity" value="' . $_POST['dexterity'] . '">Dexterity: ' . $_POST['dexterity'] . '<br>';
        echo '<input type="hidden" name="intelligence" id="intelligence" value="' . $_POST['intelligence'] . '">Intelligence: ' . $_POST['intelligence'] . '<br>';
        echo '<input type="hidden" name="faith" id="faith" value="' . $_POST['faith'] . '">Faith: ' . $_POST['faith'] . '<br>';
        echo '<input type="hidden" name="perception" id="perception" value="' . $_POST['perception'] . '">Perception: ' . $_POST['perception'] . '<br>';
        echo '<input type="hidden" name="charisma" id="charisma" value="' . $_POST['charisma'] . '">Charisma: ' . $_POST['charisma'] . '<br>';
        echo '<input type="hidden" name="reflex" id="reflex" value="' . $_POST['reflex'] . '">Reflex: ' . $_POST['reflex'] . '<br>';
        echo '</form>';
    }
} catch (Exception $e) {
    die("Erreur: " . $e->getMessage());
}
