<?php

if (isset($_POST['utilisateur']) && $_POST['utilisateur']) {

    $user = htmlspecialchars($_POST['utilisateur']);
    $tab = [];

    try {
        // Note: certains serveurs n'acceptent pas localhost
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=ajax_test;charset=utf8', 'root', 'root');
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
        foreach ($data as $key => $value) {
            $tab[] = $value;
        }
        echo json_encode($tab);
    }
    else {
        echo json_encode(array('success' => 0));
    }

    
} else {
    echo json_encode(array('success' => 0));
}