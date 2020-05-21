<?php

    $email = htmlspecialchars($_POST['email']);
    $keypass = htmlspecialchars($_POST['keypass']);
    $createdAt = time();



    try {
        // Note: certains serveurs n'acceptent pas localhost
        $bdd = new PDO('mysql:host=localhost:3306;dbname=ajax_defi;charset=utf8', 'adrien', 'adrien');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    } catch (Exception $e) {
        die('Erreur1 : ' . $e->getMessage());
    }


    $req = $bdd->prepare('INSERT INTO user (email,keypass,created_At) VALUES (?,?,?)');
    $req->execute([$email, $keypass, $createdAt]);

    echo 'Nouveau compte créé, email : ' . $email . ' mdp : ' .$keypass. ' créé le : ' .$createdAt;

