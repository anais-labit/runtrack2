<?php

for ($i = 0; $i <= 100; $i++) {

$ita="<i>$i</i><br>";
$soul="<u>$i</u><br>";

    switch ($i) {
        case 42:
            echo "La Plateforme<br>";
            break;
        case ($i > 0 && $i <= 20):
            echo $ita;
            break;
        case ($i >= 25 && $i <= 50):
            echo $soul;
            break;
        default:
            echo "$i<br>";
    }
}