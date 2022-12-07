<?php
session_start();
    try {
        if (isset($_POST['name'], $_POST['gender'], $_POST['race'])) {
            if (!isset($_SESSION['id'])){
                echo "You are not logged in. Please log in to access this page.";
                echo "<a href='../login.php'>Log in</a>";
            }
            else {
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
                $distinctivesigns = $_POST['distinctive_signs'];
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
                $id_User = $_SESSION['id'];
                $db = new PDO('mysql:host=localhost;dbname=mithrilarea;charset=utf8', 'root', '');
                $sqlQuery = "INSERT INTO Sheets 
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
                   reflex,
                    id_User) 
VALUES ('$name', '$lastname', '$age', '$gender', '$race', '$alignment', '$background', '$height', '$weight', '$hair', '$skin', '$eyes', '$distinctivesigns', '$health', '$mana', '$stamina', '$strength', '$dexterity', '$intelligence', '$faith', '$perception', '$charisma', '$reflex' , '$id_User')";
                $requete = $db->query($sqlQuery);
                echo "Sheet registered";
                header('refresh: 3; url=../index.php');
            }
        } elseif (isset($_POST['name_User'], $_POST['pw_User'], $_POST['pw_User_Verf'], $_POST['mail_User'])) {
            $name_User = $_POST['name_User'];
            $pw_User = md5($_POST['pw_User']);
            $mail_User = $_POST['mail_User'];
            $db = new PDO('mysql:host=localhost;dbname=mithrilarea;charset=utf8', 'root', '');
            $sqlQuery = "INSERT INTO Accounts 
                   (Username, 
                   Password, 
                   Mail)
    VALUES ('$name_User', '$pw_User', '$mail_User')";
            $requete = $db->query($sqlQuery);
        } else {
            echo "Error";
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
