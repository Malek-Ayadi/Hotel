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

	$req=$bdd->prepare('INSERT INTO projet.chambre (type) VALUES (?)');
	$req->execute(array
		(
			$_POST['type']
		));

	header("Location: espaceAdmin.php");
	
?>