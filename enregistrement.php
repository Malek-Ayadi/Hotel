<?php
	include 'verificationAuthentification.php';
	include 'choixNavigation.php';




	//CODE DE TRANSSMISSION DES VARIABLES !!
	$dateArr=$_GET['dateArr'];
	$dateDep=$_GET['dateDep'];
	$chambre=$_GET['chambre'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Enregistrement</title>
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="./css/background.css" rel="stylesheet">
	</head>
	<body style="height: 550px">
		
		<div class="container col-12">
	<div  style="margin-right:700px; margin-top: 220px;margin-bottom: 150px; padding-left:50px; padding-right: 50px " >
		<form action="verifExistanceClt.php?chambre=<?php echo($chambre) ?>&dateArr=<?php echo($dateArr) ?>&dateDep=<?php echo($dateDep) ?>" method="POST">
			<p><label for="cin">Saisir le CIN du client pour l'enregistrement: </label><input placeholder="0986642" type="number" name="cin" id="cin" required class="form-control form-control-lg"></p>
			<input type="submit" name="Reserver" id="Reserver" value="Réserver" class="btn " >
		</form>
	</div>
	</div>

	<script type="text/javascript">
		var para1=document.getElementById('cin');

		cin.addEventListener('change',function()
		{
			if (cin.value.toString().length!=8)
		    {
		    	cin.value="";
		    	alert("Veuillez bien saisir le numéro CIN");
			}
				
		});
	</script>
    <div id="ft" style="position: relative;bottom: -150px;right: 0px;left: 0px;"><?php include('piedpage.php'); ?></div>
	</body>
	</html>
