<?php

session_start();

try {
    $db = new PDO('mysql:host=localhost;dbname=mithrilarea;charset=utf8', 'root', '');


    if (!isset ($_POST['login']) && !isset ($_POST['password'])) {
        include 'login.php';
    } else {
        $sqlquery = "SELECT Username, Password, id_User FROM Accounts WHERE (Username = '" . $_POST['login'] . "' AND Password = '" . md5($_POST['password']) . "')";
        //Préparation de la requête
        $requete = $db->prepare($sqlquery);
        //Execution de la requête
        $requete->execute();
        //Récupération des résultats
        $compte = $requete->fetch();
        if (!empty($compte)) {
            echo "Identification réussie";
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['id'] = $compte['id_User'];
            header('refresh: 3; url=index.php');
        } else {
            //Gestion d'erreur d'id ou de mot de passe
            include 'login.php';
            echo "<p>Invalid credentials</p>";
        }
    }
} catch (Exception $e) {
    die("Erreur: " . $e->getMessage());
}
