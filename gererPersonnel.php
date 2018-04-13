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
    <link href="gererPersonnelCss.css" rel="stylesheet">

    <title>Gerer Personnel</title>

</head>
<body>
     <div class="aa">
	     <a href="ajouterPersonnel.php" class="btn btn-secondary active" role="button" aria-pressed="true" style="margin-left: 170px;">Ajouter employé</a>
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
				<td><a href="modifierPersonnel.php?<?php echo 'login='.($resultat['login']).'&nom='.$resultat['nom'].'&prenom='.$resultat['prenom'].'&mail='.$resultat['mail'] ?>">modifier</a></td>
				<td><a href="supprimerPersonnel.php?login=<?php echo ($resultat['login']) ?>">supprimer</a></td>
			</tr><?php
		}
	?>
	</table>
     </div>
</body>
