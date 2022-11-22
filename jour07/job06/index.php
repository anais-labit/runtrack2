<?php
function leetSpeak($str)
{
    // $counter = 0;

    for ($i = 0; isset($str[$i]); $i++) {
        switch ($str) {
            case $str[$i] === "a":
            case $str[$i] === "A":
                $str[$i] = 4;
                // $counter++;
                break;
            case $str[$i] === "b":
            case $str[$i] === "B":
                $str[$i] = 8;
                // $counter++;
                break;
            case $str[$i] === "e":
            case $str[$i] === "E":
                $str[$i] = 3;
                // $counter++;
                break;
            case $str[$i] === "g":
            case $str[$i] === "G":
                $str[$i] = 6;
                // $counter++;
                break;
            case $str[$i] === "l":
            case $str[$i] === "L":
                $str[$i] = 1;
                // $counter++;
                break;
            case $str[$i] === "s":
            case $str[$i] === "S":
                $str[$i] = 5;
                // $counter++;
                break;
            case $str[$i] === "t":
            case $str[$i] === "T":
                $str[$i] = 7;
                // $counter++;
                break;
        }
    }
    return $str;
}
echo leetSpeak("La vie est un long fleuve tranquille") . "<br>";
echo leetSpeak("LA VIE EST UN LONG FLEUVE TRANQUILLE") . "<br>";
