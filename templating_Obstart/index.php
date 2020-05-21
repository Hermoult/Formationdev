<?php
$title = 'Accueil';
ob_start(); ?>

<div class="form-group">
    <label for=""></label>
    <input type="text" class="form-control" name="nom" placeholder="entrer votre nom">
    <input type="text" class="form-control" name="nom" placeholder="entrer votre prenom">
    <div><br>
    <p>Salut, tu es à l'accueil, tu peux y indiquer ton nom et prenom, la navbar sera affiché sur chaque page de ce site grace à un template</p>
    </div>

</div>

<?php $content = ob_get_clean();

require 'template.php'; ?>