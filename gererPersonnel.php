<?php
	include'verificationAuthentification.php';
?>

<!doctype>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gerer Personnel</title>

</head>
<body>
	<a href="ajouterPersonnel.php">Ajouter employé</a>
	<table>
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
		while($resultat=$req->fetch())
		{
			?>
			<tr>
				<td><?php echo $resultat['login'];?></td>
				<td><?php echo $resultat['nom'];?></td>
				<td><?php echo $resultat['prenom'];?></td>
				<td><?php echo $resultat['mail'];?></td>
				<td><?php if ($resultat['admin']) echo 'oui';else echo 'non'?></td>
				<td><a href="modifierPersonnel.php?login=<?php echo ($resultat['login']) ?>">modifier</a></td>
				<td><a href="supprimerPersonnel.php?login=<?php echo ($resultat['login']) ?>">supprimer</a></td>
			</tr><?php
		}
	?>
	</table>
</body>
