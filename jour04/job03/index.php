
<?php 
$counter=0;
foreach ($_POST as $key => $value) {
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

<form action="index.php" method="post">
            <div class="form">

          <input type="text" placeholder="Prénom" name="prenom" />
          <input type="text" placeholder="Nom" name="name" />
          <input type="text" placeholder="Mail" name="mail" />
          <input type="submit" value="Envoyer" />
      </div>
      <p>Le nombre d’arguments POST envoyé est : <?php echo $counter ?> </p>

  </body>
</html>