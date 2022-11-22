<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php 
if ($_GET){
    if ($_GET['nombre']%2 == 0) {
        echo "Nombre pair";
    }
    else{
        echo "Nombre impair";
    }
}  
?>
    
<form action="index.php">
    <input type="text" placeholder="Choisis un nombre" name="nombre">
    <input type="submit" value="Envoyer" name="submit">
</form>
    
</body>
</html>