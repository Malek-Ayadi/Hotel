<?php
	include 'verificationAuthentification.php';

?>
<!DOCTYPE html>
	<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="ajouterPersonnelCss.css" rel="stylesheet">
		<title>modifier produit</title>
	</head>
	<body>
    <div class="container col-3">
		<form action="traitementModifierProduit.php?id=<?php echo $_GET['id']?>" method="POST">
			<input type="text" class="form-control" placeholder="Libellé" name="libelle" id="libelle" required>
			<input type="text" class="form-control" placeholder="Prix" name="prix" id="prix" required>
            <button type="submit" class="btn btn-primary btn" value="modifier">Modifier</button>
            <button type="submit" class="btn btn-primary btn" value="retour">Retour</button>
		</form>
    </div>

		<script src="buttonRetourProduit.js"></script>

	</body>
	</html>