<?php

$str="I'm sorry Dave I'm afraid I can't do that.";
$voy=["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"];

for ($i = 0; isset($str[$i]); $i++ ){
    for ($j = 0; isset($voy[$j]); $j++ ){
        if ($str[$i] == $voy[$j]) {
        echo $voy[$j];
        }
 }
}