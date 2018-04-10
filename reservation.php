<?php
	include 'verificationAuthentification.php';
	include 'header.php';

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
		<title>Gestion Personne</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<table align="center">
			<tr>
				<td>id_res</td> <td>id_clt</td> <td>dateArr</td> <td>dateDep</td> 
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
	</body>
	</html>