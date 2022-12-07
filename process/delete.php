<?php
session_start();
try {
    $db = new PDO('mysql:host=localhost;dbname=mithrilarea;charset=utf8', 'root', '');
    $del_fuc = "DELETE FROM sheets WHERE id_fiche = '" . $_SESSION['id_fiche'] . "'";

    $requete = $db->prepare($del_fuc);
    $requete->execute();

    echo 'Delete succesfull';

    header('refresh: 3; url=../display.php');

} catch (Exception $e) {
    die("Erreur: " . $e->getMessage());
}
