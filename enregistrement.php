<?php
	include 'verificationAuthentification.php';
	include 'choixNavigation.php';




	//CODE DE TRANSSMISSION DES VARIABLES !!
	$dateArr=$_GET['dateArr'];
	$dateDep=$_GET['dateDep'];
	$chambre=$_GET['chambre'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Enregistrement</title>
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		
		<div class="container col-6">
			<div class="border border-primary" style="margin:201px; padding:20px">
		<form action="verifExistanceClt.php?chambre=<?php echo($chambre) ?>&dateArr=<?php echo($dateArr) ?>&dateDep=<?php echo($dateDep) ?>" method="POST">
			<p><label for="cin">Saisir le CIN du client pour l'enregistrement: </label><input placeholder="0986642" type="number" name="cin" id="cin" required class="form-control form-control-lg"></p>
			<input type="submit" name="Reserver" id="Reserver" value="Réserver" class="btn btn-primary">
		</form>
	</div>
	</div>
	<?php include 'piedPage.php';  ?>
	</body>
	</html>
