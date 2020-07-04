<?php
require('src/Controller/post.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        listPosts();
    }
    elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            post();
        }
        else {
            echo 'Erreur : aucun identifiant de post envoyé';
        }
    }
    // coder ici un nouvel elseif qui vérifie les données provenant du formulaire
    // d'ajout d'un commentaire. Si $_GET['action'] est égale à addComment
    // Il faut vérifier que $_GET['id'], $_GET['auteur'] et $_GET['contenu']
    // existent et sont définis et non NULL
    // Si c'est oui, il faut appeler addComment() pour procéder à l'insertion du commentaire


    elseif ($_GET['action'] == 'addComment') {
        if (isset($_GET['id']) && $_GET['auteur'] && $_GET['contenu'] > 0) {
            addcomment($_GET['id'], $_GET['auteur'], $_GET['contenu']);
        }
    }


}
else {
    listPosts();
}