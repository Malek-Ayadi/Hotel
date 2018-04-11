<?php
	include 'verificationAuthentification.php';

?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Supprimer personnel</title>
	</head>
	<body>
		<form action="traitementSupprimerPersonnel.php?login=<?php echo $_GET['login']?>" method="POST">
			<p>êtes vous sur de vouloir supprimer ce produit?</p>
			<input type="submit" value="Supprimer">
			<input type="button" value="retour" id="retour">
		</form>

<script src="buttonRetourProduit.js"></script>
	</body>
	</html>