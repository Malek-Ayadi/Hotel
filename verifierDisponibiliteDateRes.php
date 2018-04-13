<!DOCTYPE html>
	<html>
	<head>
		<title>Verifier Disponibilité</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form action="TraitementVerifDisponibiliteDateRes.php" method="POST">
			<p>
				<label for="type">Type de la chambre: </label>
				<select size="1" name="type" id="type" required> 
					<option value="simple">Simple</option> 
					<option value="double">Double</option> 
					<option value="triple">Triple</option>
				</select>
			</p>

			<p><label for="dateArr">Date d'arrivée: </label><input type="date" name="dateArr" id="dateArr" required></p>
			<p><label for="dateDep">Date de départ: </label><input type="date" name="dateDep" id="dateDep" required></p>
			<p><input type="submit" name="valider" id="valider"></p>
		</form>

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
	</body>
	</html>