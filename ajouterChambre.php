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
		<title>ajouter chambre</title>
	</head>
	<body>
        <?php
    include ("navigationAdmin.php");
    ?>
    <div class="abc">
    <div class="container col-3">
		<form action="traitementAjouterChambre.php" method="POST">
            
            <p>
                <label for="type">Type de la chambre: </label>
                <select size="1" name="type" id="type" required class="form-control form-control-lg"> 
                    <option value="simple">Simple</option> 
                    <option value="double">Double</option> 
                    <option value="triple">Triple</option>
                </select>
            </p>
			
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