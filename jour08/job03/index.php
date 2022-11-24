<?php

session_start();
if (isset($_POST['reset'])) {
    unset($_SESSION);
    session_destroy();
}

if (isset($_POST['send'])) {
    $_SESSION['prenom'][] =  $_POST['prenom'];
     foreach($_SESSION['prenom'] as $key => $value){
        echo "<br>  $value <br>";
     }
}



// si le tableau existe, ajouter le prenom dans le tableau 


// if ($_SESSION['prenom']) == ($_POST['prenom']) {
//     $list []=$_POST['prenom'];
//     echo $list[0];
// }

// // s'il n'existe pas, créer le tableau 



?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 3 jour 8</title>
</head>

<body>


    <form action="" method="post">
        <input type="text" name="prenom" placeholder="Entrez un prénom à ajouter">
        <input name="send" type="submit" value="Envoyer">
        <input type="submit" name="reset" value="Réinitialiser">
    </form>
</body>

</html>