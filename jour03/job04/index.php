<?php

$str="Dans l'espace, personne ne vous entend crier <br/>";
$counter=0;

for ($i = 0; isset($str[$i]); $i++){
    $counter++;
    echo $str[$i];
}

echo "Cette phrase contient <b> $counter </b> caractères.";