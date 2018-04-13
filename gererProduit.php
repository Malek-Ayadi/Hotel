<!doctype>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="gererProduitCss.css" rel="stylesheet">

    <title>Gerer Produit</title>

</head>
<body>
<div class="corps" style="margin-left: 600px;">
     <div class="bb" style="margin-left: 30px;">
	       <a href="ajouterProduit.php" class="btn btn-secondary active" role="button" aria-pressed="true">Ajouter produit</a>
     </div>
    <div class="col-1">
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
		$req=$bdd->query('SELECT * from `Produit`');
			?>
        <tr class="table-dark">
            <td>Identifiant</td>
            <td>Libellé</td>
            <td>Prix</td>
            <td></td>
            <td></td>
        </tr>
        <?php
		while($resultat=$req->fetch())
		{
			?>
			<tr class="table-secondary">
				<td><?php echo $resultat['id_produit'];?></td>
				<td><?php echo $resultat['libelle'];?></td>
				<td><?php echo $resultat['prix'];?></td>
				<td><a href="modifierProduit.php?<?php echo 'id='.($resultat['id_produit']).'&libellé='.$resultat['libelle'].'&prix='.$resultat['prix'] ?>">modifier</a></td>
				<td><a href="supprimerProduit.php?id=<?php echo ($resultat['id_produit']) ?>">supprimer</a></td>
			</tr><?php
		}
	?>
	</table>
    </div>
</div>
</body>
