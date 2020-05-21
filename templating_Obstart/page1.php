<?php
$title = 'Page 1';
$style = 'style1';
ob_start(); ?>

<h1>PAGE 1</h1>
<div>Salut, tu es sur la page 1, il y a toujours la navbar, mais également un affreux fond rouge, le liens vers la feuille de style est codé dans la page "template"</div>
<?php $content = ob_get_clean();

require 'template.php'; ?>