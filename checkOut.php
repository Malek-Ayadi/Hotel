<?php
if (isset($_GET['err1']))
{
    echo("<p id='er1'>Erreur CIN</p>");

}
if (isset($_GET['err2']))
{
    echo("<p id='er2'>Reservation sous ce CIN est introuvable </p>");

}
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', ''); //changer le mdp en fonction du serveur local de ton pc
}
catch (PDOException $e)
{
    die('erreur : '.$e->getMessage());
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Check Out</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="post" action="traitementCheckOut.php">
    <label for="cin">cin</label> <input type="text" name="cin">
    <input type="submit" name="entrer" value="entrer">
</form>

</body>
</html>

