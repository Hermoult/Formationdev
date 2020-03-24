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
echo '<br/>'.'Tentative de suppression du profil '. $pseudo.'...<br/>';

// Preparation et execution de la commande sql
$sqls = 'SELECT * FROM user WHERE pseudo = ?';
$sqld = 'DELETE FROM user WHERE pseudo = ?';

// Lecture du profil
$stmt = $pdo->prepare($sqls);
$stmt->execute([$pseudo]);
$donnees = $stmt->fetch();

// Check du profil puis suppression
if($donnees==null) {
    echo '<br/>'.'Pas de profil correspondant';
}else {
    $stmt->closeCursor();
    $stmt = $pdo->prepare($sqld);
    $stmt->execute([$pseudo]);
    echo '<br/>'.'Le profil ' .$donnees['pseudo']. ' a été supprimé avec succès';
}
?>
