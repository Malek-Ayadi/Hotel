<?php
	include 'verificationAuthentification.php';
include 'choixNavigation.php';


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
	<div class="container col-6">
	<div class="border border-primary" style="margin:200px; padding:50px">
<form method="post" action="traitementFacturation.php">
    <label for="cin">Cin</label> <input type="text" name="cin" class="form-control form-control-lg">
    <input type="submit" name="entrer" value="entrer"  class="btn btn-primary">
</form>
</div>
</div>

<?php include 'piedPage.php'; ?>
</body>

</html>
