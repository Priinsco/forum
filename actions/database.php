<?php


$host = 'localhost'; 
$dbname = 'forum'; 
$username = 'root'; 
$password = ''; 

try {
    session_start();
    // Créer le DSN (Data Source Name)
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

    // Créer une nouvelle instance de PDO
    $pdo = new PDO($dsn, $username, $password);

    // Définir le mode d'erreur PDO sur Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connexion à la base de données réussie !";
} catch (PDOException $e) {
    // En cas d'erreur, afficher le message d'erreur
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
