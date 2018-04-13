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
        <link href="supprimerPersonnelCss.css" rel="stylesheet">
		<title>Supprimer personnel</title>
	</head>
	<body>
        <?php
    include ("navigationAdmin.php");
    ?>
    <div class="abc">
    <div class="container col-5">
		<form action="traitementSupprimerPersonnel.php?login=<?php echo $_GET['login']?>" method="POST">
			<h5>Êtes vous sur de vouloir supprimer cet employé ?</h5>
            <div class="bouton">
               <button type="submit" class="btn btn-primary btn" value="Supprimer">Supprimer</button>
            <button type="button" class="btn btn-primary btn" value="retour" onclick="document.location.href='espaceAdmin.php'">Retour</button>
            </div>
		</form>
    </div>
</div>    
<?php
    include ("piedPage.php");
    ?>

	</body>
	</html>