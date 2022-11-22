<?php
if (!isset($_GET['styles'])) {
    $_GET['styles'] = "";
};

// Si $_GET['styles'] a une valeur ? alors, $style devient "style-1 - 2 ou 3-.css", sinon, rien ne se passe
$style = isset($_GET['styles']) ? $_GET['styles'] . ".css" : NULL;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,800;1,400;1,600;1,800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?php echo $_GET['styles'] . ".css" ?>"> -->
    <link rel="stylesheet" href="<?php echo $style ?>">

    <title>Formulaires</title>
</head>

<body>

    <div class="form_container">
        <div class="banner">
            <h1>Restons en contact !</h1>
        </div>
        <form action="index.php" method="get">
            <select name="styles" id="styles" name="styles">
                <option value="">Choisissez un style</option>
                <option <?php echo ($_GET['styles'] == "style1") ? "selected" : NULL; ?> value="style1">Style 1</option>
                <option <?php echo ($_GET['styles'] == "style2") ? "selected" : NULL; ?> value="style2">Style 2</option>
                <option <?php echo ($_GET['styles'] == "style3") ? "selected" : NULL; ?> value="style3">Style 3</option>
            </select>
            <input type="text" placeholder="Prénom">
            <input type="text" placeholder="Nom">
            <input type="text" placeholder="Mail">
            <input type="text" placeholder="Objet">
            <textarea placeholder="Écrire ici..." style="height: 100px"></textarea>
            <input type="submit" value="Envoyer" />
        </form>
    </div>
</body>

</html>