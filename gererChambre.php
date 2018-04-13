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
		$simple=$bdd->query("SELECT * from `chambre` WHERE `chambre`.`type`='simple'");
		$double=$bdd->query("SELECT * from `chambre` WHERE `chambre`.`type`='double'");
		$triple=$bdd->query("SELECT * from `chambre` WHERE `chambre`.`type`='triple'");
			?>
        <tr class="table-dark">
            <td>Id</td>
            <td>Type</td>
            <td></td>
            <td></td>
            <td>Id</td>
            <td>Type</td>
            <td></td>
            <td></td>
            <td>Id</td>
            <td>Type</td>
            <td></td>
            <td></td>

        </tr>
        <?php
		while(1)
		{
			($simple1=$simple->fetch());
			($double1=$double->fetch());
			($triple1=$triple->fetch());
			?>
			<tr class="table-secondary">
				<td><?php if (isset($simple1['id_chamb'])) echo $simple1['id_chamb'];?></td>
				<td><?php if (isset($simple1['type'])) echo $simple1['type'];?></td>
				<td><a href="modifierChambre.php?<?php echo 'id='.($simple1['id_chamb']).'&type='.$simple1['type']?>"><?php if (isset($simple1['type'])) echo 'modifier';?></a></td>
				<td><a href="supprimerChambre.php?id=<?php echo ($simple1['id_chamb']) ?>"><?php if (isset($simple1['type'])) echo 'supprimer';?></a></td>

				<td><?php if (isset($double1['id_chamb'])) echo $double1['id_chamb'];?></td>
				<td><?php if (isset($double1['type'])) echo $double1['type'];?></td>
				<td><a href="modifierChambre.php?<?php echo 'id='.($double1['id_chamb']).'&type='.$double1['type']?>"><?php if (isset($double1['type'])) echo 'modifier';?></a></td>
				<td><a href="supprimerChambre.php?id=<?php echo ($double1['id_chamb']) ?>"><?php if (isset($double1['type'])) echo 'supprimer';?></a></td>

				<td><?php if (isset($triple1['id_chamb'])) echo $triple1['id_chamb'];?></td>
				<td><?php if (isset($triple1['type'])) echo $triple1['type'];?></td>
				<td><a href="modifierChambre.php?<?php echo 'id='.($triple1['id_chamb']).'&type='.$triple1['type']?>"><?php if (isset($triple1['type'])) echo 'modifier';?></a></td>
				<td><a href="supprimerChambre.php?id=<?php echo ($triple1['id_chamb']) ?>"><?php if (isset($triple1['type'])) echo 'supprimer';?></a></td>

				</tr><?php
			if ((!isset($simple1['type']))and (!isset($double1['type']))and(!isset($triple1['type']))) 
			{
				break;
			}
		}
	?>
	</table>
     </div>
</body>
