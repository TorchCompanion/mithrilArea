<?php
try {
    if (isset($_POST['name'], $_POST['gender'], $_POST['race'])) {
        $label = array('name', 'lastname', 'age', 'gender', 'race', 'alignment', 'background', 'height', 'weight', 'hair', 'skin', 'eyes',
            'distinctive_signs', 'description', 'health', 'mana', 'stamina', 'strength', 'dexterity', 'intelligence', 'faith', 'perception', 'charisma', 'reflex');
        echo '<h1>Is this who you are?</h1><br>';
        echo '<form action="process/pdf.php" method="post" id="form-visu">';
        for ($i = 0, $iMax = count($label); $i < $iMax; $i++) {
            echo '<input type="hidden" name="' . $label[$i] . '" value="' . $_POST[$label[$i]] . '">' . ucfirst(preg_replace('/[_]/', ' ', $label[$i])) . ' : ' . $_POST[$label[$i]] . '<br>';
        }

        echo '<input type="submit" value="View PDF" id="but-pdf"><input type="button" value="Save in database" id="but-save" onclick="Save()"></form>';
    }
} catch (Exception $e) {
    die("Erreur: " . $e->getMessage());
}
?>
<script>
    function Save(){
        document.getElementById("form-visu").action = "process/insert.php";
        document.getElementById("form-visu").submit();
    }
</script>
