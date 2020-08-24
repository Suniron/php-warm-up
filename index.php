<?php
echo '<h1>Résultats des exerices de <a href="https://fabien-torre.fr/Enseignement/tp/PHP/" target="_blank">cette page</a></h1><br>';

// EXERCICE 1
echo '<h2>1)<br></h2>';
// 1
echo 'Une chaîne<br>';
//2
$maVariable = 123;
echo $maVariable, '<br>';
// 3
echo "Je suis un texte avec la variable $maVariable", '<br>';
// 4
if ($maVariable < 300) {
    echo "La variable est plus petite que 300", '<br>';
}

// EXERCICE 2
echo '<h2>2)<br></h2>';
// 1
$count = 1;
while ($count <= 10) {
    echo $count;
    $count++;
}

echo '<br>';

// 2
for ($count = 1 ; $count <= 10 ; $count++) {
    echo $count;
}

echo '<br>';

// 3
function countFor() {
    for ($count = 1 ; $count <= 10 ; $count++) {
        echo $count;
    }
}

countFor();

echo '<br>';

// 4
function countUpTo(int $to) {
    for ($count = 1 ; $count <= $to ; $count++) {
        echo $count;
    }
}

countUpTo(2);

echo '<br>';

// EXERCICE 3
echo '<h2>3)<br></h2>';

// 1
/**
 * Retourne une ligne au nombre d'étoile (par défaut) donné au paramètre **$nb**.
 * Le paramètre **$str** est en option, il sert à définir le caractère à afficher.
 */
function printChars(int $nb, string $str = '*') {
    // Initialise le compteur:
    $i = 1;
    // Boucle jusqu'au nombre donné:
    while ($i<=$nb) {
        echo $str; // affiche une étoile
        $i++; // incrémente le compteur
    }
}

printChars(8); // fait afficher 8 étoiles

echo '<br>';

// 2
$i = 1;
while ($i <= 8) { // parcourir 8 fois
    printChars(8); // fait afficher 8 étoiles
    echo '<br>';
    $i++;
}

echo '<br>';

// 3
/**
 * Déssine un triangle rectangle avec des caractères '*'
 * 
 * Le paramètre **$size** définit le nombre de ligne et largeur de la forme
 *
 *  Le paramètre **$dir** définit l'emplacement de l'angle: "lb", "lt", "rb", "rt" (left, bottom, right, top)
 */
function drawRightTriangle(int $size, string $dir = "lb") {
    $row = 1; // initialiser le compteur de ligne à 0

    if (strpos($dir, 'l') !== false) {
        while ($row <= $size) { // tant que la ligne n'est pas arrivée à la taille max
            // Si l'angle est à gauche:
            if (strpos($dir, 'l') !== false) {
                echo printChars($row);  // dessiner les caractéres + un retour à la ligne
                echo printChars($size - $row, '_');
            } else { // Si à droite:
                echo printChars($size - $row, '_');
                echo printChars($row);  // dessiner les caractéres + un retour à la ligne
            }

            echo '<br>'; // retour à la ligne
            $row++; // on passe à la ligne suivante
        }
    }
}

drawRightTriangle(5); // bas à gauche
echo '<br>';
drawRightTriangle(5,'rb'); // bas à droite
echo '<br>';
drawRightTriangle(5,'lt'); // haut à gauche
echo '<br>';
drawRightTriangle(5,'lt'); // haut à droite