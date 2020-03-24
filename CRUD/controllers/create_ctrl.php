<?php

// Recuperation des données entrée par le client, mise en variable

$pseudo = htmlspecialchars($_POST['pseudo']);
$password = htmlspecialchars($_POST['password']);
$description = htmlspecialchars($_POST['description']);

// Connexion a la base via PDO

try {
    $pdo = new PDO('mysql:host=localhost;dbname=crud', 'phpmyadmin', 'Adher57070', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
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
