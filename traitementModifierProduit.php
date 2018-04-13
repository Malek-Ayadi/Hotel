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

	$req=$bdd->prepare('UPDATE produit SET libellé = :lib, prix = :prix WHERE produit.id_produit = :id');
	$req->execute(array
		(
			'lib'=>$_POST['libelle'],
			'prix'=>$_POST['prix'],
			'id'=>$_GET['id']
		));

	header("Location: espaceAdmin.php");
	
?>

