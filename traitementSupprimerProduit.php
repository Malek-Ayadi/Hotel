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
	$bdd->query("USE projet");
	$req=$bdd->prepare('DELETE FROM `produit` WHERE `produit`.`id_produit` = ?');
	$req->execute(array
		(
			$_GET['id'],
		));
	header("Location: gererProduit.php");
	
	?>