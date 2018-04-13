<?php
	include 'verificationAuthentification.php';
	include 'choixNavigation.php'; ?>
<!DOCTYPE html>
	<html>
	<head>

		<title>Verifier Disponibilité</title>
		<meta charset="utf-8">
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container col-12">
			<div class="border border-primary" style="margin:201px; padding-left:100px; padding-right: 100px; " >
		<form action="TraitementVerifDisponibiliteDateRes.php" method="POST">
			<p>
				<label for="type">Type de la chambre: </label>
				<select size="1" name="type" id="type" required class="form-control form-control-lg"> 
					<option value="simple">Simple</option> 
					<option value="double">Double</option> 
					<option value="triple">Triple</option>
				</select>
			</p>

			<p><label for="dateArr">Date d'arrivée: </label><input type="date" name="dateArr" id="dateArr" required class="form-control form-control-lg"></p>
			<p><label for="dateDep">Date de départ: </label><input type="date" name="dateDep" id="dateDep" required class="form-control form-control-lg"></p>
			<p><input type="submit" name="valider" id="valider" class="btn btn-primary"></p>
		</form>
	</div>
</div>

			<script type="text/javascript">
				var dateArr=document.getElementById('dateArr');
				var dateDep=document.getElementById('dateDep');

					dateDep.addEventListener('change',function()
				{
					if (dateDep.value<=dateArr.value)
				    {
						alert("Erreur: dateArr >= dateDep");
						dateDep.value="jj/mm/aaaa";
					}
						
				});
			</script>
	<?php include 'piedPage.php';  ?>
	</body>
	</html>