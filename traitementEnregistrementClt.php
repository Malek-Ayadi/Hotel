<?php

	include '../verificationAuthentification.php';


	try
	{
		$bdd= new PDO('mysql:host=localhost;dbName=projet', 'root','');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());

	}

	// VERIFIER AJOUT BASE DE DONNEE ERREUUR
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

	$dateArr=$_GET['dateArr'];
	$dateDep=$_GET['dateDep'];
	$chambre=$_GET['chambre'];
	$cin=$_GET['cin'];
	header("Location: enregistrementRes.php?cin=$cin&chambre=$chambre&dateArr=$dateArr&dateDep=$dateDep");
	
?>