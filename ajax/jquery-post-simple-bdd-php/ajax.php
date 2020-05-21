<?php

if (isset($_POST['utilisateur']) && $_POST['utilisateur']) {

    $user = htmlspecialchars($_POST['utilisateur']);

    try {
        // Note: certains serveurs n'acceptent pas localhost
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=ajaxTest;charset=utf8', 'adrien', 'adrien');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    catch(Exception $e){
        die('Erreur1 : '.$e->getMessage());
    }
    $req = $bdd->prepare('SELECT * FROM users WHERE user_name = :user');
    $req->bindParam(':user', $user);
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_ASSOC);

    if(count($data) > 0){
        // ici on peut ouvrir la session et définir les infos
        echo json_encode(array('success' => 1));
    }
    else {
        echo json_encode(array('success' => 0));
    }

    
} else {
    echo json_encode(array('success' => 0));
}