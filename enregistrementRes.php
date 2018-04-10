?php
	/*
	include 'verificationAuthentification.php';
	include 'header.php';
	*/
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>enregistrementRes</title>
	</head>
	<body>
		<form action="traitementEnregistrementRes.php" method="POST">
			<p><label for="id_clt">Id client</label><input type="number" name="id_clt" id="id_clt"></p>
			<p><label for="dateDep">Date de départ</label><input type="date" name="dateDep" id="dateDep"></p>
			<p><label for="dateArr">Date d'arrivee</label><input type="date" name="dateArr" id="dateArr"></p>
			<input type="submit" name="reserver" value="Réserver">
		</form>
	</body>
	</html>