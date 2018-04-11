<?php
	include '../../verificationAuthentification.php';

?>
<!DOCTYPE html>
	<html>
	<head>
		<title>ajouter produit</title>
	</head>
	<body>
		<form action="traitementAjouterProduit.php" method="POST">
			<p><label for="id">ID</label><input type="text" name="id" id="id"></p>
			<p><label for="libelle">Libellé</label><input type="text" name="libelle" id="libelle"></p>
			<p><label for="cin">Prix</label><input type="text" name="prix" id="prix"></p>
			<input type="submit" value="ajouter">
		</form>


	</body>
	</html>