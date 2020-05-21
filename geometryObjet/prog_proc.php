<?php
$titre = 'Dimensions des sphères';
$rayon_sphere_1 = 2;
$rayon_sphere_2 = 5;

$surface_sphere_1 = 4*pi()*pow($rayon_sphere_1, 2);
$surface_sphere_2 = 4*pi()*pow($rayon_sphere_2, 2);
$volume_sphere_1 = (4*pi())*pow($rayon_sphere_1, 3)/3;
$volume_sphere_2 = (4*pi())*pow($rayon_sphere_2, 3)/3;

$surface_totale = $surface_sphere_1 + $surface_sphere_2;
$volume_total = $volume_sphere_1 + $volume_sphere_2;

ob_start();?>
<div class="container mt-5">
<ul>
    <li>Sphère n°1
        <ul>
            <li>Rayon: <strong><?php echo $rayon_sphere_1 ?> m</strong></li>
            <li>Surface: <strong><?php echo $surface_sphere_1 ?> m2</strong></li>
            <li>Volume: <strong><?php echo $volume_sphere_1 ?>m3</strong></li>
        </ul>
    </li>
    <li>Sphère n°1
        <ul>
            <li>Rayon:<strong><?php echo $rayon_sphere_1 ?> m</strong></li>
            <li>Surface:<strong><?php echo $surface_sphere_1 ?>m2</strong></li>
            <li>Volume:<strong><?php echo $volume_sphere_1 ?>m3</strong></li>
        </ul>
    </li>
    <li>Addition des deux sphères
        <ul>
            <li>Surface globale:<strong><?php echo $surface_totale ?>m2</strong></li>
            <li>Volume globale:<strong><?php echo $volume_total ?>m3</strong></li>
        </ul>
    </li>
</ul>
</div>

<?php $vue = ob_get_clean(); 

require 'template.php';
?>
