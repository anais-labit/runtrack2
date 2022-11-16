<!DOCTYPE html>
<head>
</head>
<body>

<?php
$str="On n’est pas le meilleur quand on le croit mais quand on le sait";
$dic= [
    "consonnes" => ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z", "B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "P","Q", "R", "S", "T", "V", "W", "X", "Z"],
    "voyelles" => ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"]
];

$voy_counter=0;
$con_counter=0;

for ($i = 0; isset($str[$i]); $i++){

    foreach ($dic["consonnes"] as $consonne){
        if ($str[$i] === $consonne){
        $con_counter++;
    }
    }
}

for ($i = 0; isset($str[$i]); $i++){

    foreach ($dic["voyelles"] as $voyelle){
        if ($str[$i] === $voyelle){
        $voy_counter++;
    }
    }
}
?>

<table>
    <tr>
        <th>Consonnes</th>
        <th>Voyelles</th>
    </tr>
    <tbody>
        <td> <?php echo $con_counter?> </td>
    <td> <?php echo $voy_counter?> </td>
 
    </tbody>
    </table>

</body>
</html>