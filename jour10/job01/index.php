<?php

// on se connecte à la db
$conn = new mysqli('localhost', 'root', '', 'jour09');
// var_dump($conn);

// On créé et envoie la requête 
$request = $conn->query("SELECT * FROM etudiants");

// on récupère le resultat
$result = $request->fetch_all();
// var_dump($result[0][1]);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 01 jour 10</title>
</head>

<body>

    <table>
        <thead>
            <th> id </th>
            <th> prenom </th>
            <th> nom </th>
            <th> naissance </th>
            <th> sexe </th>
            <th> email </th>
        </thead>
        <tbody>
            <?php foreach ($result as $ligne) {
                echo "<tr>";
                foreach ($ligne as $value) {
                    echo "<td>" . $value . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>