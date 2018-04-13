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

	$req = $bdd->prepare ('UPDATE projet.chambre SET type=? WHERE id_chamb = ?');
		$req->execute(array(
			$_POST['type'],
			$_POST['id_chamb']
		));
	

	header("Location: espaceAdmin.php");
	
?>

