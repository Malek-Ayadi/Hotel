
<div class="bdy"  style="margin-left: 400px;">
     <div class="aa" style="margin-top: 20px;margin-bottom: 30px;">
	     <a href="ajouterPersonnel.php" class="btn  active" role="button" aria-pressed="true" style="margin-left: 200px;">Ajouter employé</a>
     </div>
     <div class="col-2" style="padding-left: 0px; margin-left: -20px;">
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
		$req=$bdd->query('SELECT * from `employee`');
			?>
        <tr class="table-dark">
            <td>Login</td>
            <td>Nom</td>
            <td>Prénom</td>
            <td>E-mail</td>
            <td>Admin</td>
            <td></td>
            <td></td>

        </tr>
        <?php
		while($resultat=$req->fetch())
		{
			?>
			<tr class="table-secondary">
				<td><?php echo $resultat['login'];?></td>
				<td><?php echo $resultat['nom'];?></td>
				<td><?php echo $resultat['prenom'];?></td>
				<td><?php echo $resultat['mail'];?></td>
				<td><?php if ($resultat['admin']) echo 'oui';else echo 'non'?></td>
				<td><a href="modifierPersonnel.php?<?php echo 'login='.($resultat['login']).'&nom='.$resultat['nom'].'&prenom='.$resultat['prenom'].'&mail='.$resultat['mail'].'&admin='.$resultat['admin']?>">modifier</a></td>
				<td><a href="supprimerPersonnel.php?login=<?php echo ($resultat['login']) ?>">supprimer</a></td>
			</tr><?php
		}
		
	?>
	</table>
     </div>
</div>

