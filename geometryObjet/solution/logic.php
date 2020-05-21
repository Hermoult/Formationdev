<?php

require 'sphere.php';

$sphere1 = new Sphere(2);
$sphere2 = new Sphere(5);

$surface1 = $sphere1->calcul_surface_sphere();
$surface2 = $sphere2->calcul_surface_sphere();

$volume1 = $sphere1->calcul_volume_sphere();
$volume2 = $sphere2->calcul_volume_sphere();

$addition_surface = $sphere1->calcul_surface_2spheres($surface1, $surface2);
$addition_volume = $sphere1->calcul_volume_2spheres($volume1, $volume2);


echo $volume1;
