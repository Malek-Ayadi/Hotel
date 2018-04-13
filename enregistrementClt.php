<?php
	include 'verificationAuthentification.php';
	include 'choixNavigation.php';
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>enregistrementClt</title>
	</head>
	<body>
		<div class="container col-6">
			<div class="border border-primary" style="margin:100px; padding:20px">
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