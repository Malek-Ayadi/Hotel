<?php

	include 'verificationAuthentification.php';
	include 'choixNavigation.php';

	
	try
	{
		$bdd= new PDO('mysql:host=localhost;dbName=projet', 'root','');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());

	}

	$req=$bdd->query('SELECT id_clt,cin FROM projet.client ');
	 while ($aff=$req->fetch()) 
	 {
	 	if ($aff['cin']==$_GET['cin'])
	 	{
	 		$id=$aff['id_clt'];
	 		break;
	 	}
	 }
	 $chambre=$_GET['chambre'];
	 $dateArr=$_GET['dateArr'];
	 $dateDep=$_GET['dateDep'];
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Enregistrement</title>
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="./css/background.css" rel="stylesheet">
	</head>
	<body>
		<div class="container col-12">
	<div  style="margin-right:700px; margin-top: 100px;margin-bottom: 100px; padding-left:50px; padding-right: 50px " >
		<form action="traitementEnregistrementRes.php" method="POST">
			<p><label for="id_clt">Id client: </label><input required readonly type="number" value="<?php echo ("$id")?>" name="id_clt" id="id_clt" class="form-control form-control-lg"></p>
			<p><label for="id_clt">Numéro Chambre: </label><input readonly required type="number" value="<?php echo ("$chambre")?>" name="id_chamb" id="id_chamb" class="form-control form-control-lg"></p>
			<p><label for="dateArr">Date d'arrivee: </label><input readonly type="date" value="<?php echo ("$dateArr")?>" name="dateArr" id="dateArr" required class="form-control form-control-lg"></p>
			<p><label for="dateDep">Date de départ: </label><input type="date" value="<?php echo ("$dateDep")?>" name="dateDep" id="dateDep" required readonly class="form-control form-control-lg"></p>
			<input type="submit" name="reserver" value="Réserver"  class="btn btn-primary">
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
