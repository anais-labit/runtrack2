<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>Contact</title>
  </head>
  <body>

    <form action="index.php" method="post">
        <input type="text" placeholder="Prénom" name="prenom" />
        <input type="text" placeholder="Nom" name="nom" />
        <input type="submit" value="Envoyer" />
    </form>

    <table>
       <thead>
        <tr>
            <th>argument</th>
            <th>valeur</th>
        </tr>
       </thead>
       <tbody>
        <tr>
            <td>Prénom</td>
            <td> <?php if ($_POST) {
                echo $_POST['prenom'];
            }
            ?>
            </td>
        </tr>
        <tr>
            <td>Nom</td>
            <td> <?php if ($_POST) {
                echo $_POST['nom'];
            }
            ?>
            </td>
        </tr>
       </tbody>
    </table>
  </body>
</html>