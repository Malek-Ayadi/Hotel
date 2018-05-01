
<div class="cor" style="margin-left: 220px; margin-top: 20px; ">
     <div class="aa" style="margin-left: 224px;">
	     <a href="ajouterChambre.php" class="btn " role="button" aria-pressed="true" style="margin-left: 170px;margin-bottom: 30px;">Ajouter Chambre</a>
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
            <td>Identifiant</td>
            <td>Type</td>
            <td></td>
            <td></td>
            <td>Identifiant</td>
            <td>Type</td>
            <td></td>
            <td></td>
            <td>Identifiant</td>
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
</div>

