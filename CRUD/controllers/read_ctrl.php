<?php
if (isset($_POST['pseudo']))
{
    // Recup des données du formulaire
    $pseudo = htmlspecialchars($_POST['pseudo']);
    
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
    $sql = 'SELECT * FROM user WHERE pseudo = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$pseudo]);
    $donnees = $stmt->fetch();
    // Réponse sur le navigateur
    if($donnees==null) {
            echo "Pas de profil correspondant";
    }else{
            echo '<br>'.'Le profil ayant pour pseudo \''. $donnees['pseudo'] . '\' a pour mot de passe \'' . $donnees['password'] . '\', voici sa description : \'' . $donnees['description'] .'\'<br>' ;
    }
}
?>
