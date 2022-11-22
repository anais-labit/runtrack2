<?php

function calcule($a, $operation, $b)
{
    switch ($operation) {
        case $operation == "*":
            return ($a * $b . "<br>");
            break;
        case $operation == "/":
            return ($a / $b . "<br>");
            break;
        case $operation == "+":
            return ($a + $b . "<br>");
            break;
        case $operation == "-":
            return ($a - $b . "<br>");
            break;
    }
}

echo calcule(2, "*", 3);
echo calcule(2, "-", 3);
echo calcule(2, "/", 3);
echo calcule(2, "+", 3);
