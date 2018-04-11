<?php
	include 'verificationAuthentification.php';
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
