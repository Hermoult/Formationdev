<?php
// Chargement des classes: 
// Coder la déclaration nécessaire pour appeler l'autoloader à cet endroit
// en lieu et place des deux require() ci-dessous.

use App\Repository\CommentManager;
use App\Repository\PostManager;



function listPosts()
{
    //Complétez cette fonction qui appelle un objet PostManager
    // et utilise sa méthode permettant d'afficher la liste des postes

    $postManager =  new PostManager;
    $posts = $postManager-> getPosts();

    require('template/views/indexView.php');
}

function post()
{
    $postManager = new PostManager;
    $commentManager = new CommentManager;

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('template/views/postView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}