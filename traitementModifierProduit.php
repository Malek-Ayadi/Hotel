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

	$req = $bdd->prepare ('UPDATE projet.produit SET libelle=?, prix=? WHERE id_produit = ?');
		$req->execute(array(
			$_POST['libelle'],
			$_POST['prix'],
			$_GET['id']
		));
	

	header("Location: espaceAdmin.php");
	
?>

