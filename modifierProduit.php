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

        <!-- Custom styles for this template -->
        <link href="ajouterPersonnelCss.css" rel="stylesheet">
         <link href="./css/background.css" rel="stylesheet">

        
		<title>modifier produit</title>
	</head>
	<body>
		<?php
    include ("navigationAdmin.php");
    ?>
    <div class="container col-12">
    <div  style="margin-right:700px; margin-top: 170px;margin-bottom: 170px; padding-left:50px; padding-right: 50px " >
		<form action="traitementModifierProduit.php?<?php echo 'id='. $_GET['id']?>" method="POST">
			<input type="text" class="form-control" placeholder="Libellé" name="libelle" id="libelle" value="<?php echo $_GET['libellé'] ?>" required>
			<input type="text" class="form-control" placeholder="Prix" name="prix" id="prix" value="<?php echo $_GET['prix'] ?>" required>
            <button type="submit" class="btn btn-primary btn" value="modifier">Modifier</button>
            <button type="button" class="btn btn-primary btn" value="retour" onclick="document.location.href='espaceAdmin.php'">Retour</button>
		</form>
    </div>
</div>

    <?php
    include ("piedPage.php");
    ?>


	</body>
	</html>