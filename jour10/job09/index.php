<?php
$conn = new mysqli('localhost', 'root', '', 'jour09');
$request = $conn->query("SELECT nom, capacite FROM salles ORDER BY capacite DESC");
$result = $request->fetch_all();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 9 jour 10</title>
</head>

<body>
    <table border="1px" width="50%">
        <tr">
            <th width="100%">Capacité des salles par ordre décroissant</th>
            </tr>
    </table>

    <table border="1px" width="50%">
        <thead>
            <th>Nom</th>
            <th>Capacité</th>
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