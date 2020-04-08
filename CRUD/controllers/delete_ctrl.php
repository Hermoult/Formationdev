<?php
// Recuperation des données entrée par le client, mise en variable
$pseudo = htmlspecialchars($_POST['pseudo']);
$password = htmlspecialchars($_POST['password']);
$description = htmlspecialchars($_POST['description']);

// Variables Database
$DB_NAME = "crud";
$DB_DSN = "mysql:host=localhost;dbname=" . $DB_NAME;
$DB_USER = "adrien";
$DB_PASSWORD = "adrien";

// Connexion Database
try {
    $pdo = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Throwable $th) {
    die('error sql connection');
}

// Preparation et execution de la commande sql
$sqls = 'SELECT * FROM user WHERE pseudo = ?';
$sqld = 'DELETE FROM user WHERE pseudo = ?';

// Lecture du profil
$stmt = $pdo->prepare($sqls);
$stmt->execute([$pseudo]);
$donnees = $stmt->fetch();

// Check du profil puis suppression
if ($donnees == null) {
    echo '<br/>' . 'Pas de profil correspondant';
} else {
    $stmt->closeCursor();
    $stmt = $pdo->prepare($sqld);
    $stmt->execute([$pseudo]);
    echo '<br/>' . 'Le profil ' . $donnees['pseudo'] . ' a été supprimé avec succès';
}
