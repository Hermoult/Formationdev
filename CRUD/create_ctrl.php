    <?php
// Recuperation des données entrée par le client, mise en variable
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $password = htmlspecialchars($_POST['password']);
    $description = htmlspecialchars($_POST['description']);
// Connexion a la base via PDO
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=crud', 'phpmyadmin', 'Adher57070');
        echo 'connexion réussie' . '<br/>';
    } catch (\Throwable $th) {
        die('error sql connection');
        echo 'connexion échouée' . '<br/>';
    }
    echo '<br/>'.'Bonjour '. $pseudo.' votre mot de pass est '.$password.'<br/>';
// Création de la commande sql
    $sql = '
    INSERT INTO user(pseudo, password, description) 
    VALUES (?,?,?)
    ';
// Preparation et execution de la requete de la commande sql via PDO
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$pseudo,$password,$description]);

// Retour client sur navigateur
    echo 'Votre profil a été créé avec Succès !';
    ?>
