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

	$req=$bdd->prepare('INSERT INTO projet.produit (id_produit,libellé,prix) VALUES (?,?,?)');
	$req->execute(array
		(
			$_POST['id'],
			$_POST['libelle'],
			$_POST['prix']
		));

	header("Location: gererProduit.php");
	
?>