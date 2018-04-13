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

	$req=$bdd->prepare('UPDATE produit SET type = :type WHERE produit.id_produit = :id');
	$req->execute(array
		(
			'lib'=>$_POST['type'],
			'id'=>$_GET['id']
		));

	header("Location: espaceAdmin.php");
	
?>

