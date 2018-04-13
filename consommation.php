<?php
<<<<<<< HEAD
if(($_GET['err'])==1)
{
    echo("<p id='er1'>Erreur ID Produit inexistant</p>");
}
else if(($_GET['err'])==2)
{
    echo("<p id='er1'>Erreur ID Client inexistant</p>");
}
=======
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
>>>>>>> e41ae3189a528bcbb63d8de5866eba142f325a92
?>
<!DOCTYPE html>
<html>
<head>
    <title>Consommation</title>
    <meta charset="utf-8">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container col-6">
	<div class="border border-primary" style="margin:201px; padding:20px">
	
<form method="post" action="traitementConsommation.php">
	<div class="form-group">
    <label for="id_produit">ID produit</label><input type="number" name="id_produit" id="id_produit" class="form-control form-control-lg">
    <label for="id_clt">ID client</label><input type="number" name="id_clt" id="id_clt" class="form-control form-control-lg">
    <input type="submit" name="valider" value="valider" class="btn btn-primary">
</div>
</form>
</div>
</div>
<?php include 'piedPage.php';  ?>
</body>

</html>