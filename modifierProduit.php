<?php
	include 'verificationAuthentification.php';

?>
<!DOCTYPE html>
	<html>
	<head>
		<title>modifier produit</title>
	</head>
	<body>
		<form action="traitementModifierProduit.php?id=<?php echo $_GET['id']?>" method="POST">
			<p><label for="libelle">Libellé</label><input type="text" name="libelle" id="libelle" required></p>
			<p><label for="prix">Prix</label><input type="text" name="prix" id="prix" required></p>
			<input type="submit" value="modifier">
			<input type="button" value="retour" id="retour">
		</form>

		<script src="buttonRetourProduit.js"></script>

	</body>
	</html>