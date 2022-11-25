<?php

$conn = new mysqli('localhost', 'root', '', 'jour09');
$request = $conn->query("SELECT prenom, nom, naissance, sexe, email FROM etudiants WHERE prenom LIKE 'T%'");
$result = $request->fetch_all();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 4 jour 10</title>
</head>

<body>

    <table>
        <thead>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Naissance</th>
            <th>Sexe</th>
            <th>Email</th>
        </thead>
        <tbody>
            <?php
            foreach ($result as $ligne) {
                echo "<tr>";
                foreach ($ligne as $value) {
                    echo "<td>" . $value . "</td>";
                }
            }
            ?>
        </tbody>
    </table>

</body>

</html>