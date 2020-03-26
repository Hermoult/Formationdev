<?php

// Recuperation des données entrée par le client, mise en variable

$pseudo = htmlspecialchars($_POST['pseudo']);
$password = htmlspecialchars($_POST['password']);
$description = htmlspecialchars($_POST['description']);

// Variables Database
$DB_NAME = "crud";
$DB_DSN = "mysql:host=localhost;dbname=".$DB_NAME;
$DB_USER = "adrien"; 
$DB_PASSWORD = "adrien"; 

// Connexion Database
try {
    $pdo = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Throwable $th) {
    die('error sql connection');
} 
echo '<br/>'.'Bonjour '. $pseudo.' votre mot de pass est '.$password.'<br/>';

// Preparation et execution de la commande sql

$sql = "INSERT INTO user (pseudo, password, description) VALUES (?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$pseudo,$password,$description]);

// Retour client sur navigateur

echo 'Votre profil a été créé avec Succès !';
?>
