<?php

function bonjour($jour)

{
    switch ($jour) {
        case true:
            echo "Bonjour<br>";
            break;
        case false:
            echo "Bonsoir<br>";
            break;
    }
}

bonjour(false);
bonjour(true);
