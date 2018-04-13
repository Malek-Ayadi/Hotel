<?php

	include 'verificationAuthentification.php';
	
	include 'choixNavigation.php';
	
if (isset($_GET['err']))
{
    echo("<p id='err'>Consommation enregistrée</p>");
}
if (isset($_GET['err1']))
{
    echo("<p id='err1'>Erreur ID Produit et ID Client inexistants</p>");
}
if (isset($_GET['err2']))
{
    echo("<p id='err2'>Erreur ID Client inexistant</p>");
}
if (isset($_GET['err3']))
{
    echo("<p id='err3'>Erreur ID Produit inexistant</p>");
}


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
    <title>Consommation</title>
    <meta charset="utf-8">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/background.css" rel="stylesheet">
</head>
<body>
	<div id=bc>
	<div class="container col-12">
	<div  style="margin-right:700px; margin-top: 150px;margin-bottom: 150px; padding-left:50px; padding-right: 50px " >
	
<form method="post" action="traitementConsommation.php">
	<div class="form-group">
    <label for="id_produit">ID produit</label><input type="number" name="id_produit" id="id_produit" class="form-control form-control-lg">
    <label for="id_clt">ID client</label><input type="number" name="id_clt" id="id_clt" class="form-control form-control-lg">
    <input type="submit" name="valider" value="valider" class="btn btn-primary">
</div>
</form>
</div>
</div>
</div>
<?php include 'piedPage.php';  ?>
</body>

</html>