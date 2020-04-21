<?php

function autoloadAdrien($class){
    require 'class/'.$class.'.php';
}
spl_autoload_register('autoloadAdrien');

$user = new user('Adri');
echo $user->getNom();
$ennemy = new ennemi;
echo $ennemy->getNom();