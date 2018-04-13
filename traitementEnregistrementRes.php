<?php

	//include '../verificationAuthentification.php';

	try
	{
		$bdd= new PDO('mysql:host=localhost;dbName=projet', 'root','');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());

	}

	
	$req=$bdd->prepare('INSERT INTO projet.reservation (id_clt,dateArr,dateDep,id_chamb) VALUES (?,?,?,?)');
	$req->execute(array
		(	
			$_POST['id_clt'],
			$_POST['dateArr'],
			$_POST['dateDep'],
			$_POST['id_chamb']
		));
	header("Location: reservation.php");
	

	
?> 