<?php

setcookie('nbvisites', '0', time() + 3600);

if (isset($_POST['reset'])) {
    $_COOKIE['nbvisites'] = 0;
}

if (isset($_COOKIE['nbvisites'])) {
    $counter = ($_COOKIE['nbvisites'] + 1);
    setcookie('nbvisites', $counter);
} else {
    $_COOKIE['nbvisites'] = 1;
}

echo 'Vous avez consulté ' . $_COOKIE['nbvisites'] . ' fois cette page';


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

    <form action="" method="post">
        <input type="submit" name="reset" value="Réinitialiser">
    </form>

</body>

</html>