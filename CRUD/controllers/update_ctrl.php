<?php
if (isset($_POST['pseudo']))
{
    // Recup des données du formulaire
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

    // Preparation, envoie de la commande sql et lecture du profil corespondant
    
    $sqls = 'SELECT * FROM user WHERE pseudo = ?';
    $sqlu ='UPDATE user SET password = ?, description = ? WHERE pseudo = ?';
    try {
        $stmt = $pdo->prepare($sqls);
        $stmt-> execute([$pseudo]);
        $donnees = $stmt->fetch();
        var_dump($donnees['pseudo']);
        } catch (\Throwable $th) {
            die('error reading');
            }
    try {
        $stmt = $pdo->prepare($sqlu);
        $stmt -> execute([$password,$description,$pseudo]);
        $donnees = $stmt->fetch();
        var_dump($donnees);
        } catch (\Throwable $th) {
            die('error updating');
            }
}