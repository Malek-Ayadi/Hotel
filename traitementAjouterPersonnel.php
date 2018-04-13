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
	if((isset($_POST['admin']))and($_POST['admin']=='on'))
		$admin=1;
	else $admin=0;

	$req=$bdd->prepare('INSERT INTO projet.employee (login,password,admin,nom,prenom,mail) VALUES (?,?,?,?,?,?)');
	$req->execute(array
		(
			$_POST['login'],
			$_POST['password'],
			$admin,
			$_POST['nom'],
			$_POST['prenom'],
			$_POST['mail'],
		));


	header("Location: espaceAdmin.php");
	
?>