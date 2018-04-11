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
		<title>Réservation</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body >
		<?php include('navigation/choixNavigation.php'); ?>

		<table class="table table-striped" align="center" >
			<tr>
      <th scope="col">id_reservation</th>
      <th scope="col">id_client</th>
      <th scope="col">Date Arrivée</th>
      <th scope="col">Date_Depart</th>
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
			</tr> <?php } ?>
		</table>
		<?php include('piedpage.php'); ?>
	</body>
	</html>