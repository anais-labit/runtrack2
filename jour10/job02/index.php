<?php

$conn = new mysqli('localhost', 'root', '', 'jour09');
$request = $conn->query("SELECT nom, capacite FROM salles");
$result = $request->fetch_all();
// var_dump($result);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 2 jour 8</title>
</head>

<body>
    <table>
        <thead>
            <th>Nom</th>
            <th>Capacité</th>
        </thead>
        <tbody>
            <tr>
                <?php
                foreach ($result as $ligne) {
                    echo "<tr>";
                    foreach ($ligne as $value) {
                        echo "<td>" . $value . "<td>";
                    }
                    echo "<tr>";
                }
                ?>

            </tr>
        </tbody>
    </table>


</body>

</html>