<?php $title = 'ECF n°3'; ?>

<?php ob_start(); ?>
<div class="news">
    <h1>LE BLOG PHP</h1>
    <p>Les derniers posts :</p>
</div>
<?php
while ($data = $req->fetch())
{
?>

<div class="card" style="width: 18rem;">
    <img src="alaji.png" style="width: 50px" class="card-img-top" alt="alaji">
    <div class="card-body">
        <h5 class="card-title"><?= htmlspecialchars($data['titre']) ?></h5>
        <p class="card-text"><?= nl2br(htmlspecialchars($data['contenu'])) ?></p>
        <a class="btn btn-primary" href="post.php?id= <?= $data['id_post'] ?>" >Commentaires</a>
    </div>
</div>

<?php
}
?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
