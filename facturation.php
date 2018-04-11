<?php
/* include 'verificationAuthentification.php';
include 'header.php'; */

try
{
    $bdd= new PDO('mysql:host=localhost;dbName=projet', 'root','');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Facturation</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="post" action="traitementFacturation.php">
    <label for="cin">Cin</label> <input type="text" name="cin">
    <input type="submit" name="entrer" value="entrer">
</form>

</body>
</html>
