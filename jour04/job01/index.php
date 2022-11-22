
<?php 
$counter=0;
foreach ($_GET as $key => $value) {
    $counter++;
}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>Contact</title>
  </head>
  <body>

<form action="index.php">
            <div class="form">

          <input type="text" placeholder="Prénom" name="prenom" />
          <input type="text" placeholder="Nom" name="name" />
          <input type="text" placeholder="Mail" name="mail" />
          <input type="submit" value="Envoyer" />
      </div>
      <p>Le nombre d’argument GET envoyé est : <?php echo $counter ?> </p>

  </body>
</html>