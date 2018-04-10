<?php
/*
	include 'verificationAuthentification.php';
	include 'header.php';
*/
	try
	{
		$bdd= new PDO('mysql:host=localhost;dbName=projet', 'root','');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());

	}

	$req=$bdd->prepare('INSERT INTO projet.client (nom,prenom,ddn,mail,adresse,cin,tel) VALUES (?,?,?,?,?,?,?)');
	$req->execute(array
		(
			$_POST['nom'],
			$_POST['prenom'],
			$_POST['ddn'],
			$_POST['mail'],
			$_POST['adresse'],
			$_POST['cin'],
			$_POST['tel']
		));

	header('Location: enregistrement.php');
	
?>