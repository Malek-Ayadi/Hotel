<!doctype>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gerer Produit</title>

</head>
<body>
	<a href="ajouterProduit.php">Ajouter produit</a>
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
		$req=$bdd->query('SELECT * from `Produit`');
		while($resultat=$req->fetch())
		{
			?>
			<tr>
				<td><?php echo $resultat['id_produit'];?></td>
				<td><?php echo $resultat['libellé'];?></td>
				<td><?php echo $resultat['prix'];?></td>
				<td><a href="modifierProduit.php?id=<?php echo ($resultat['id_produit']) ?>">modifier</a></td>
				<td><a href="supprimerProduit.php?id=<?php echo ($resultat['id_produit']) ?>">supprimer</a></td>
			</tr><?php
		}
	?>
	</table>
</body>
