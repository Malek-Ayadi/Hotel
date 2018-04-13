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
	$req=$bdd->prepare('DELETE FROM `employee` WHERE `employee`.`login` = ?');
	$req->execute(array
		(
			$_GET['login'],
		));
	header("Location: espaceAdmin.php");
	
	?>