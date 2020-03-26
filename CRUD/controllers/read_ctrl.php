<?php
if (isset($_POST['pseudo']))
{
    // Recup des données du formulaire
    $pseudo = htmlspecialchars($_POST['pseudo']);
    // Connexion a la base via PDO
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=crud', 'adrien', 'adrien', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (\Throwable $th) {
        die('error sql connection');
    } 
    // Reponse de la commande sur navigateur
    echo '<br/>'.'Lecture des informations du profil ayant pour pseudo '. $pseudo . '...<br>';
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
