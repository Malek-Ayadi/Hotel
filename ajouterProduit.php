<?php
	include 'verificationAuthentification.php';
    include 'verificationAdmin.php';

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
        <link rel="shortcut icon" href="logo2.png">

        <!-- Custom styles for this template -->
       <link href="./css/background.css" rel="stylesheet">
		<title>ajouter produit</title>
	</head>
	<body>
		<?php
    include ("navigationAdmin.php");
    ?>
<div class="container col-12">
    <div  style="margin-right:700px; margin-top: 150px;margin-bottom: 200px; padding-left:50px; padding-right: 50px " >
		<form action="traitementAjouterProduit.php" method="POST">
			<p><input type="text" class="form-control" placeholder="Libellé" name="libelle" id="libelle"></p>
			<p><input type="text" class="form-control" placeholder="Prix" name="prix" id="prix"></p>
            <button type="submit" class="btn btn-primary btn" value="ajouter">Ajouter</button>
            <button type="button" class="btn btn-primary btn" value="retour" onclick="document.location.href='espaceAdmin.php'">Retour</button>
		</form>
    </div>
</div>
    <?php
    include ("piedPage.php");
    ?>

	</body>
	</html>