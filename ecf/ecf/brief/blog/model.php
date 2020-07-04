<?php
/* 
Créez une fonction dbConnect() qui nous permet d'éviter de répéter le bloc try/catch 
de connexion à la base de données
*/

function dbConnect()
{
    try {
        $db = new PDO('mysql:localhost=3306;dbname=ecf;charset=utf8', 'adrien', 'adrien');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function getPosts()
{
    // Remplacer le bloc try/catch par une variable $db en lui affectant l'appel à la fonction dbConnect()
    $db = dbConnect();

	$req = $db->query('SELECT id_post, titre, contenu, DATE_FORMAT(date_post, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM posts ORDER BY date_post DESC LIMIT 0, 5');

	return $req;
}

function getPost($postId)
{
    // Remplacer le bloc try/catch par une variable $db en lui affectant l'appel à la fonction dbConnect()
    $db = dbConnect();

    $req = $db->prepare('SELECT id_post, titre, contenu, DATE_FORMAT(date_post, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM posts WHERE id_post = ?');
    $req->execute(array($postId));
    $post = $req->fetch();

    return $post;
}

function getComments($postId)
{
    // Remplacer le bloc try/catch par une variable $db en lui affectant l'appel à la fonction dbConnect()
    $db = dbConnect();

    $comments = $db->prepare('SELECT id, auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire FROM commentaires WHERE id_post = ? ORDER BY date_commentaire DESC');
    $comments->execute(array($postId));

    return $comments;
}

