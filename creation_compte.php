<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account creation - Mithril Area</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="col-12 row text-center">
<?php
include 'header.html';
?>
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
    $db = new PDO('mysql:host=localhost;dbname=mithrilarea;charset=utf8', 'root', '');
    $sqlQuery = "SELECT mail FROM accounts WHERE mail = '" . $_POST['mail_User'] . "'";
    $requete = $db->query($sqlQuery);
    $result = $requete->fetch();
    if ($_POST['pw_User'] === $_POST['pw_User_Verf']) {
        if (is_array($result)) {
                echo "<p>This mail is already used !</p>";
        }
        elseif (!isset($_SESSION['id'])) {
            include 'process/insert.php';
            echo "<p>Your account has been created !</p>";
            header('refresh:3;url=index.php');
        } else {
            echo "<p>You are already logged in !</p>";
            header('refresh:3;url=index.php');
        }
    } else {
        echo "<p>Password doesn't match !</p>";
    }
}
?>
</body>
</html>