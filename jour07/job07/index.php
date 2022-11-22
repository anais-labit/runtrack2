<?php

function gras($str)
{   
    $str = $_GET["str"];
    // fonction system pour convertir une string en array - à retravailler sorry !
    $arr = str_split($str);
    // print_r($arr);
    $cap = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
    $new_str = " ";

    for ($i = 0 ; isset($arr[$i]) ; $i++) {
        for ($j = 0 ; isset($cap[$j]) ; $j++) {
            if (($arr[$i][0]) == $cap[$j]) {
                $arr[$i] = "<b>" . $arr[$i] . "</b>";
            }
        }
        $new_str .= $arr[$i];
    }
    return $new_str;
}
echo gras($_GET["str"]);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>

<body>
    <form action="index.php">
        <input type="text" placeholder="Entrez une phrase" name="str">
        <select name="fonction">
            <option value="gras">Gras</option>
            <option value="cesar">Cesar</option>
            <option value="plateforme">Plateforme</option>
            <input type="submit" value="Envoyer" name="env">
    </form>
</body>

</html>