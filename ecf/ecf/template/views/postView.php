<?php $title = 'ECF n°3'; ?>
<?php ob_start(); ?>
<div class="news">
    <h1>LE BLOG PHP</h1>
    <p><a href="index.php">Retour à la liste des posts</a></p>
</div>


<div class="news">
    <h3>
        <?= htmlspecialchars($post['titre']) ?>
        le <?= $post['date_creation'] ?>
    </h3>
    
    <p>
        <?= nl2br(htmlspecialchars($post['contenu'])) ?>
    </p>
</div>

<h3>Commentaires</h3>

<?php
while ($comment = $comments->fetch())
{
?>
    <p><strong><?= htmlspecialchars($comment['auteur']) ?></strong> le <?= $comment['date_commentaire'] ?></p>
    <p><?= nl2br(htmlspecialchars($comment['commentaire'])) ?></p>
<?php
}
?>
<?php $content = ob_get_clean(); ?>

<?php require('template/base.php'); ?>
