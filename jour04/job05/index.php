<?php 
if ($_POST){

    if (($_POST['username'] === "John") && ($_POST['password'] === "Rambo")){
        echo "C’est pas ma guerre";
    } 
    else{
        echo "Votre pire cauchemar";
    };
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
</head>
<body>
<form action="index.php" method="post">
    <input type="text" placeholder="Username" name="username"> 
    <input type="text" placeholder="Mot de passe" name="password">
    <input type="submit" value="Envoyer" name="env">
</form>
</body>
</html>