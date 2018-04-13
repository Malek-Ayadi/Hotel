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

	$req=$bdd->query('SELECT cin FROM projet.client ');
	 while ($aff=$req->fetch()) 
	 {
	 	if ($aff['cin']==$_POST ['cin'])
	 	{	
	 		$dateArr=$_GET['dateArr'];
			$dateDep=$_GET['dateDep'];
	 		$chambre=$_GET['chambre'];
	 		$num=$_POST['cin'];
	 		header("Location: enregistrementRes.php?cin=$num&chambre=$chambre&dateArr=$dateArr&dateDep=$dateDep");
	 		exit();
	 	}
	 }
	 $dateArr=$_GET['dateArr'];
	 $dateDep=$_GET['dateDep'];
	 $chambre=$_GET['chambre'];
	 $num=$_POST['cin'];
	header("Location: enregistrementClt.php?cin=$num&chambre=$chambre&dateArr=$dateArr&dateDep=$dateDep");

?>