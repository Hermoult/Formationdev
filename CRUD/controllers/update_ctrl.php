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

    // Lecture du profil
    
    $sqls = 'SELECT * FROM user WHERE pseudo = ?';
    $sqlu ='UPDATE user SET password = ?, description = ? WHERE pseudo = ?';
    
    $stmt = $pdo->prepare($sqls);
    $stmt-> execute([$pseudo]);
    $profil = $stmt ->fetch();
        
    if ($profil == null){
        echo "Pas d'utilisateurs correspondant <br>";
    } else {
        $stmt ->closeCursor();
        $stmt = $pdo->prepare($sqlu);
        $stmt -> execute([$password,$description,$pseudo]);
        echo "Le profil $pseudo a été modifié avec succès, nouvau mot de pass : \"$password\", nouvelle description : \"$description\".";
    }     
}
?>