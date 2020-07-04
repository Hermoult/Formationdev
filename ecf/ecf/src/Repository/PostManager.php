<?php

namespace App\Repository;


class PostManager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id_post, titre, contenu, DATE_FORMAT(date_post, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM posts ORDER BY date_post DESC LIMIT 0, 5');

        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        // Coder dans la fonction prepare() ci-dessous la requête sql permettant de sélectionner un post grâce à son id
        $req = $db->prepare('SELECT id_post, titre, contenu, DATE_FORMAT(date_post \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM posts WHERE id_post = ?'); 
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }


    private function dbConnect()
    {
        $db = new \PDO('mysql:localhost=3306;dbname=ecf;charset=utf8', 'adrien', 'adrien');
        return $db;
    }
}