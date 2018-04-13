<?php
	include 'verificationAuthentification.php';


	//CODE DE TRANSSMISSION DES VARIABLES !!
	$dateArr=$_GET['dateArr'];
	$dateDep=$_GET['dateDep'];
	$chambre=$_GET['chambre'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Enregistrement</title>
	</head>
	<body>
		<form action="verifExistanceClt.php?chambre=<?php echo($chambre) ?>&dateArr=<?php echo($dateArr) ?>&dateDep=<?php echo($dateDep) ?>" method="POST">
			<p><label for="cin">Saisir le CIN du client pour l'enregistrement: </label><input placeholder="0986642" type="number" name="cin" id="cin" required></p>
			<input type="submit" name="Reserver" id="Reserver" value="Réserver">
		</form>
	</body>
	</html>
