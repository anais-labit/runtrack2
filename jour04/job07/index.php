<!-- ajout job 7 jour 4 - création d'un tableau et de deux boucles qui récupèrent 
les valeurs hauteur et largeur. La première, pour le triangle, la seconde, pour le 
rectangle. On incrémente les valeurs i et j à chaque tour.
Pour le toit :
    Tant qu'en les ajoutant entre elles, i et j sont égales à la largeur/2 (début), ajouter autant de 
    / (+ 1 pour le décallage) dans des cellules du tableau.
    Tant qu'en les soustrayant entres elles, elles sont égales à la valeur de la largeur/2 (fin),
    ajouter un \. 
    Tant qu'en les ajoutant entre elles, elles sont inférieures à la valeur de la largeur/2,
    faire apparaitre des cellules vides.  
Pour la maison :
    tant que i est inférieur ou égal à hauteur et Tant que j est inférieur ou égal à la largeur, 
        si j est égal à 1 ou à la largeur, remplir des cases avec | (début et fin des côtés)
        si i est différent de largeur égal à la hauteur remplir des cases avec _
        sinon remplir les cases avec du vide. 
-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
</head>
<body>
<pre>
    <table>
        <?php

        if ($_POST){

        $largeur=($_POST['largeur']);
        $hauteur=($_POST['hauteur']); 

        for ($i = 1 ; $i <= $hauteur ; $i++){
            echo "<tr>";
            for ($j = 1 ; $j <= $largeur ; $j++){
                if (($j + $i <= $largeur / 2) || ($j - $i > $largeur / 2)){
                    echo "<td>";
                }
                elseif ($j + $i == $largeur / 2 + 1){
                    echo "<td>/";
                }
                elseif ($j - $i == $largeur / 2){
                    echo "<td>\\";
                }
                else {echo "<td>_";}
            }
        }


        for ($i = 1 ; $i <= $hauteur ; $i++){
            echo "<tr>";
            for ($j = 1 ; $j <= $largeur ; $j++){
                if (($j == 1) || ($j == $largeur)){
                echo "<td>|";
                }
                else if ($i == $hauteur){
                echo "<td>_";
                }
                else {
                echo "<td>";
                }
            }
        }
            }
        ?>
    </table>
    </pre>
    <form action="index.php" method="post">
        <input type="text" placeholder="largeur" name="largeur">
        <input type="text" placeholder="hauteur (largeur/2)" name="hauteur"> 
        <input type="submit" value="Envoyer" name="env">
    </form>
  </body>
</html>