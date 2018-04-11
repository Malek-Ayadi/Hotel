<?php
<<<<<<< HEAD
	include 'verificationAuthentification.php';
	
=======

/*	include 'verificationAuthentification.php';
	include 'header.php';*/

	include 'enregistrementClt.php';
	include 'enregistrementRes.php';
>>>>>>> 5b085b022d9d7462c9856636ddcbe52259d5062e
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Enregistrement</title>
	</head>
	<body>
		<form action="verifExistanceClt.php" method="POST">
			<p><label for="cin">CIN </label><input type="number" name="cin" id="cin" required></p>
			<input type="submit" name="Reserver" id="Reserver" value="Réserver">
		</form>
	</body>
	</html>
