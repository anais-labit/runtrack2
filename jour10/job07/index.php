<?php

$conn = new mysqli('localhost', 'root', '', 'jour09');
$request = $conn->query("SELECT SUM(superficie) FROM etages");
$result = $request->fetch_all();

// var_dump($result);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 7 jour 10</title>
</head>

<body>

    <table>
        <thead>
            <th>Superficie totale</th>
        </thead>
        <tbody>
            <tr>
                <?php
                foreach ($result as $ligne) {
                    foreach ($ligne as $value) {
                        echo "<td>" . $value . "</td>";
                    }
                }
                ?>
            </tr>
        </tbody>

    </table>

</body>

</html>