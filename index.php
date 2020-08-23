<?php
echo '<h1>Résultats des exerices de <a href="https://fabien-torre.fr/Enseignement/tp/PHP/" target="_blank">cette page</a></h1><br>';

echo '<h2>1)<br></h2>';
echo 'Une chaîne<br>';
$maVariable = 123;
echo $maVariable, '<br>';
echo "Je suis un texte avec la variable $maVariable", '<br>';
if ($maVariable < 300) {
    echo "La variable est plus petite que 300", '<br>';
}