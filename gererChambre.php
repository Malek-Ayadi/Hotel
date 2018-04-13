<!doctype>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

 
    <title>Gerer Chambre</title>

</head>
<body>
     <div class="aa">
	     <a href="ajouterChambre.php" class="btn btn-secondary active" role="button" aria-pressed="true" style="margin-left: 170px;">Ajouter Chambre</a>
     </div>
     <div class="col-2">
	<table class="table-hover table-sm">
	<?php
			try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', ''); //changer le mdp en fonction du serveur local de ton pc
		}
		catch (PDOException $e)
		{
			die('erreur : '.$e->getMessage());
		}
		$req=$bdd->query('SELECT * from `chambre`');
			?>
        <tr class="table-dark">
            <td>Id</td>
            <td>Type</td>

            <td></td>
            <td></td>

        </tr>
        <?php
		while($resultat=$req->fetch())
		{
			?>
			<tr class="table-secondary">
				<td><?php echo $resultat['id_chamb'];?></td>
				<td><?php echo $resultat['type'];?></td>
				<td><a href="modifierChambre.php?<?php echo 'id='.($resultat['id_chamb']).'&type='.$resultat['type']?>">modifier</a></td>
				<td><a href="supprimerChambre.php?id=<?php echo ($resultat['id_chamb']) ?>">supprimer</a></td>
			</tr><?php
		}
	?>
	</table>
     </div>
</body>
