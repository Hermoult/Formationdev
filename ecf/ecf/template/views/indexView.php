<?php $title = 'ECF n°3'; ?>

<?php ob_start(); ?>
<div class="news">
    <h1>LE BLOG PHP</h1>
    <p>Les derniers posts :</p>
</div>
<?php
while ($data = $posts->fetch()) {

?>

    <div class="card" style="width: 18rem;">
        <img src="public/alaji.png" style="width: 50px" class="card-img-top" alt="alaji">
        <div class="card-body">
            <h5 class="card-title"><?= htmlspecialchars($data['titre']) ?></h5>
            <p class="card-text"><?= nl2br(htmlspecialchars($data['contenu'])) ?></p>
            <a class="btn btn-primary" href="index.php?action=post&id=<?= $data['id_post']  ?>">Commentaires</a>
        </div>
        <div class="container">
            <form method="GET" action="index.php?action=addComment">
                <div class="form-group row">
                    <label for="contenu" class="col-sm-1-12 col-form-label">Commentaires</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="contenu" id="contenu" placeholder="Tapez votre votre contenu">
                        <input type="text" hidden >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Soumettre</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Il doit envoyer un get sur le fichier index.php -->
    </div>

<?php
}
?>

<?php $content = ob_get_clean(); ?>

<?php require('template/base.php'); ?>