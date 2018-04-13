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
		<title>ajouter produit</title>
	</head>
	<body>
    <div class="container col-3">
		<form action="traitementAjouterProduit.php" method="POST">
			<input type="text" class="form-control" placeholder="Identifiant" name="id" id="id">
			<input type="text" class="form-control" placeholder="Libellé" name="libelle" id="libelle">
			<input type="text" class="form-control" placeholder="Prix" name="prix" id="prix">
            <button type="submit" class="btn btn-primary btn" value="ajouter">Ajouter</button>
		</form>
    </div>


	</body>
	</html>