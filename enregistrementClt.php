<?php
	include 'verificationAuthentification.php';
	include 'choixNavigation.php';
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
    <link href="css/full-width-pics.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
		<title>Enregistrement</title>
		<link href="./css/background.css" rel="stylesheet">
	</head>
	<body style="background-size: 1346px 1270px ">
		<div class="container col-12">
	<div  style="margin-right:700px; margin-top: 50px;margin-bottom: 50px; padding-left:50px; padding-right: 50px " >
		<form action="traitementEnregistrementClt.php?cin=<?php echo ($_GET['cin']) ?>&chambre=<?php echo ($_GET['chambre']) ?>&dateDep=<?php echo ($_GET['dateDep']) ?>&dateArr=<?php echo ($_GET['dateArr']) ?>" method="POST">
			<p><label for="nom">Nom: </label><input required type="text" name="nom" id="nom" class="form-control form-control-lg"></p>
			<p><label for="prenom">Prénom: </label><input required type="text" name="prenom" id="prenom" class="form-control form-control-lg"></p>
			<p><label for="cin">CIN: </label><input required readonly type="text" name="cin" id="cin" value="<?php echo ($_GET['cin']) ?>" class="form-control form-control-lg"></p>
			<p><label for="ddn">Date de naissance: </label><input required type="date" name="ddn" id="ddn" class="form-control form-control-lg"></p>
			<p><label for="mail">E-mail: </label><input required type="email" name="mail" id="mail" class="form-control form-control-lg"></p>
			<p><label for="adresse">Adresse: </label><input required type="text" name="adresse" id="adresse" class="form-control form-control-lg"></p>
			<p><label for="tel">Tél: </label><input required type="number" name="tel" id="tel" class="form-control form-control-lg"></p>
			<p><label for="Reserver"></label><input required type="submit" name="Reserver" id="Reserver" value="Réserver" class="btn btn-primary"></p>
		</form>
	</div>
</div>

<?php include 'piedPage.php';  ?>
	</body>
	</html>