<?php
$title = 'page 2';
$style = 'style2';
ob_start(); ?>

<h1>PAGE 2</h1>
<div>Salut, tu es sur la page 2, il y a toujours la navbar, mais également un affreux fond vert, le liens vers la feuille de style est codé dans la page "template"</div>

<?php $content = ob_get_clean();

require 'template.php'; ?>