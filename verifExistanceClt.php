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

	$req=$bdd->query('SELECT cin FROM projet.client ');
	 while ($aff=$req->fetch()) 
	 {
	 	if ($aff['cin']==$_POST ['cin'])
	 	{
	 		$num=$_POST['cin'];
	 		header("Location: enregistrementRes.php?cin=$num");
	 		exit();
	 	}
	 }

	 $num=$_POST['cin'];
	header("Location: enregistrementClt.php?cin=$num");

?>