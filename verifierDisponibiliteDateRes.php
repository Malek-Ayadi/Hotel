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
        <link href="css/full-width-pics.css" rel="stylesheet">
        <link href="./css/background.css" rel="stylesheet">
        <link href="reservationCss.css" rel="stylesheet">
        <title>Enregistrement</title>
	<body id="bb">
    <?php
    include 'choixNavigation.php';
    ?>

        <div class=bg>

		<div class="container col-12">
			<div  style="margin-right:700px; margin-top: 100px;margin-bottom: 100px; padding-left:50px; padding-right: 50px " >
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
			<p><input type="submit" name="valider" id="valider" class="btn " ></p>
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
	
	</div>
	</body>
	</html>