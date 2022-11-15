<?php


// itérer de 2 à 1000 et incrémenter i de 1 à chaque tour
for ($i = 2; $i <= 1000; $i++) {
    $counter=0;
    // création de j pour le comparer à i et l'incrémenter de 1 à chaque tour de boucle
    for ($j = 2 ; $j < $i ; $j++){
        // incrémenter counter si le i%j est égal à 0 (or, le reste d'un nb entier est forcément 1 ou lui même)
        if ($i%$j == 0) {
        $counter++;
        }
    } 
        // si la valeur de counter = 0, c'est un nb premier à afficher
        if ($counter == 0) {
            echo "$i est un nombre premier<br>";
        } 
}