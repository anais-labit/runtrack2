<?php

$nbs = [200, 204, 173, 98, 171, 404, 459];

foreach ($nbs as $nb) {
    if ($nb % 2 == 0) {
        echo "$nb est un nombre pair<br/>";
    }
    else {
        echo "$nb est un nombre impair<br/>"; 
    }
}
?>