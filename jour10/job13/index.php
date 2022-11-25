<?php

$conn = new mysqli('localhost', 'root', '', 'jour09');
$requete = $conn->query("SELECT salles.nom, etages.nom FROM salles JOIN etages ON etages.id=salles.id_etage");
$result = $requete->fetch_all();


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 13 jour 10</title>
</head>

<body>

    <style>
        body {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        th {
            background-color: #639FAB;
            color: white;
            font-size: 20px;
            padding: 10px;
        }

        table td {
            border: 2px solid #639FAB;
            
        }

        td {
            text-align: center;
        }
    </style>

    <table>
        <thead>
            <th>Nom des salles</th>
            <th>Nom des étages</th>
        </thead>
        <tbody>
            <?php
            foreach ($result as $ligne) {
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