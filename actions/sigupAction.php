<?php


require_once("database.php");


if(isset($_POST["validate"]))
{
    $pseudo = htmlspecialchars($_POST["pseudo"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $firstname = htmlspecialchars($_POST["firstname"]);
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    if (!empty($password) && !empty($lastname) && !empty($firstname) && !empty($password)) {
        
        $sql ="SELECT pseudo FROM users WHERE pseudo = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$pseudo]);
        if ($stmt->rowCount() == 0) {
            $sql = "INSERT INTO users (pseudo, lastname, firstname, password) VALUES (?, ?, ?, ?)";
            $stmt= $pdo->prepare($sql);
            $stmt->execute([$pseudo, $lastname, $firstname, $password]);

            $getInfoOfThisUser = "SELECT id FROM users WHERE pseudo = ?";
            $stmt = $pdo->prepare($getInfoOfThisUser);
            $stmt->execute([$pseudo]);
        }else{
           $errorMSG = "Ce pseudo existe déjà";
        }
    } else {
        echo "Le mot de passe est vide";
    }
} 