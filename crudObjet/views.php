<?php
require_once ('user.php');
require_once ('userManager.php');

$a = new UserManager;
$a->update('guigui','yo','0001-02-02');
$contact = $a -> read('guigui');


echo '<pre>';
print_r($contact);
echo '</pre>';
