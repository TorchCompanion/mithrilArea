<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un compte</title>
</head>
<body>
<form action="creation_compte.php" method="post">
    <div class="name_User">
        <label for="name_User">Enter your username : </label>
        <input type="text" name="name_User" id="name_User" required>
    </div>
    <div class="pw_User">
        <label for="pw_User">Enter your password :</label>
        <input type="password" name="pw_User" id="pw_User" minlength="8" required>
    </div>
    <div class="pw_User_Verf">
        <label for="pw_User_Verf">Confirm your password :</label>
        <input type="password" name="pw_User_Verf" id="pw_User_Verf" minlength="8" required>
    </div>
    <div class="mail_User">
        <label for="mail_User">Enter your mail :</label>
        <input type="text" name="mail_User" id="mail_User" required>
    </div>
    <input type="submit" value="Create your account">
</form>

<?php
if (!empty($_POST['name_User']) && !empty($_POST['pw_User']) && !empty($_POST['pw_User_Verf']) && !empty($_POST['mail_User'])) {
    if ($_POST['pw_User'] == $_POST['pw_User_Verf']) {
        $_SESSION['notSend'] = "ok";
        if ($_SESSION['notSend'] !== "ok") {
            include 'insert.php';
            echo "Your account has been created !";
        } else {
            echo "You already have an account !";
        }
    } else {
        echo "Password doesn't match !";
    }
} else {
    echo "Fill all fields !";
}

?>
</body>
</html>