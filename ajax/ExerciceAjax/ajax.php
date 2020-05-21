<?php

session_start();

if (isset($_POST['email']) && $_POST['keypass']) {

    $email = htmlspecialchars($_POST['email']);
    $keypass = htmlspecialchars($_POST['keypass']);
    

    try {
        // Note: certains serveurs n'acceptent pas localhost
        $bdd = new PDO('mysql:host=localhost:3306;dbname=ajax_defi;charset=utf8','adrien', 'adrien');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    } catch (Exception $e) {
        die('Erreur1 : ' . $e->getMessage());
    }
    $req = $bdd->prepare('SELECT * FROM user WHERE email = :email');
    $req->bindParam(':email', $email);
    $req->execute();
    $_SESSION = $req->fetch(PDO::FETCH_ASSOC);

    

    if ($_SESSION['keypass'] == $keypass) {
        // ici on peut ouvrir la session et définir les infos
        echo json_encode(array('success' => 1));
    } else {
        echo json_encode(array('success' => 0));
    }
} else {
    echo json_encode(array('success' => 0));
}
