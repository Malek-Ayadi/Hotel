<?php
	include '../../verificationAuthentification.php';

?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Supprimer produit</title>
	</head>
	<body>
		<form action="traitementSupprimerProduit.php?id=<?php echo $_GET['id']?>" method="POST">
			<p>êtes vous sur de vouloir supprimer ce produit?</p>
			<input type="submit" value="Supprimer">
			<input type="button" value="retour" id="retour">
		</form>

<script src="buttonRetour.js"></script>
	</body>
	</html>