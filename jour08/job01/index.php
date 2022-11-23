<?php
session_start();
var_dump($_SESSION['nbvisites']);

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}

if (isset($_SESSION['nbvisites'])) {
    ($_SESSION['nbvisites']++);
}

echo 'Vous avez consulté ' . $_SESSION['nbvisites'] . ' fois cette page';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 1 jour 8</title>
</head>

<body>
    <form action="" method="post">
        <input type="submit" name="reset" value="Réinitialiser">
    </form>
</body>

</html>