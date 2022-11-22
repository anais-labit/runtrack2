
<?php

function occurences($str, $char)

{
    $counter = 0;

    for ($i = 0; isset($str[$i]); $i++) {
        if (($str[$i]) === $char) {
            $counter++;
        }
    }
    return $counter;
}

echo "Le nombre de caractère est " . occurences("Bonjour", "o") . "<br>";
echo "Le nombre de caractère est " . occurences("Life is life", "e") . "<br>";
echo "Le nombre de caractère est " . occurences("Je vais bien, tout va bien", "i") . "<br>";
