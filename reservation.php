<?php
	include 'verificationAuthentification.php';
	try
	{
		$bdd= new PDO('mysql:host=localhost;dbName=projet', 'root','');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());

	}
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
    <title>Réservation</title>
</head>

	<body >
		<?php include('choixNavigation.php'); ?>

		<table class="table table-striped" align="center" >
			<tr>
      <th scope="col">id_reservation</th>
      <th scope="col">id_client</th>
      <th scope="col">Date Arrivée</th>
      <th scope="col">Date_Depart</th>
      <th scope="col">id_chamb</th>
    </tr>
			
			<?php
			 $req=$bdd->query('SELECT * FROM projet.reservation ');
			 while ($aff=$req->fetch()) 
			{
				
			?>
			<tr>
				<td>
					<?php 
						
						echo ($aff['id_res']);
					?>
				</td>
				<td>
					<?php 
					
						echo ($aff['id_clt']);
					?>
		
				</td>
			 <td>
			 		<?php 
					
						echo ($aff['dateArr']);
					?>
		 	</td>
		 	<td>
		 			<?php 
					
						echo ($aff['dateDep']);
					?>
		 	</td> 
		 	<td>
		 			<?php 
					
						echo ($aff['id_chamb']);
					?>
		 	</td> 
			</tr> <?php } ?>
		</table>
        <div id="ft" style="position: relative;bottom: -332px;right: 0px;left: 0px;"><?php include('piedpage.php'); ?></div>
	</body>
	</html>