<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirage au sort</title>
<script type="text/javascript">

// déclare la liste de noms parmi lesquels on va tirer au sort
const names = [
    'Adrien',
    'Anne',
    'Benjamin',
    'Bouka',
    'Carlos',
    'Isabelle',
    'Jonathan',
    'Kevin',
    'Laurine',
    'Marie',
    'Mehdi',
    'Morgane',
    'Serhat',
    'Steph',
    'Thomas',
    'Xavier'
];

// attache une fonction à éxécuter quand la structure de la page est chargée
document.addEventListener('DOMContentLoaded', () => {

 // récupère dans le DOM les noeuds du bouton et div d'affichage du résultat
    const button = document.getElementById('jimTheBest');
    const result = document.getElementById('result');

 // attache une fonction au bouton pour réagir à l'évènement click
    button.addEventListener('click', () => {

    const count = names.length;

    if (count === 0){
    alert('Il n\'y a plus personne à tirer au sort!');
    return;
}

 // choisi un index aléatoirement entre 0 et 15 inclus
 const index = Math.floor(Math.random() * count);

 // récupère le nom du vainqueur dans la liste des noms
const winner = names.splice(index, 1);

 // mets à jour le document pour afficher le résultat
result.textContent = 'Le grand vainqueur est ' + winner + '!';

});
});

</script>
</head>
<body>
    <h1>Tirage au sort</h1>
    <hr>
    <button id="jimTheBest">J'❤️ mon formateur</button>
    <hr>
    <div id="result"></div>
</body>
</html>