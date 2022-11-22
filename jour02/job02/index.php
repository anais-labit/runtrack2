

<?php

// option pour remplacer les chiffres voulus par un br
    for ($i = 0; $i <= 1337; $i++) {
        switch ($i) {
            case 26 : case 37 : case 88 : case 1111 : case 3233 :
                echo "<br>";
                break;

            default;
                echo "$i<br>";
            }
        }

// // option pour sauter le tour de boucle qui correspond au chiffre         
//     for ($i = 0; $i <= 1337; $i++) {
//         if ($i == 26) { 
//                 continue;
//             }
//             echo "$i<br>";
//         }
?>