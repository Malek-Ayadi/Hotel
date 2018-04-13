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
	if((isset($_POST['admin']))and($_POST['admin']=='on'))
		$admin=1;
	else $admin=0;
	$req=$bdd->prepare("UPDATE `employee` SET `login` = ?, `password`=?, `nom`=?, `prenom`=?, `mail`=?,`admin`=? WHERE `employee`.`login` = ?");
	$req->execute(array
		(
			$_POST['login'],
			$_POST['password'],
			$_POST['nom'],
			$_POST['prenom'],
			$_POST['mail'],
			$admin,
			$_GET['login']
		));
<<<<<<< HEAD
	
=======
	echo $_POST['login'],$_GET['login'];
	var_dump($req->errorInfo());
>>>>>>> 9e914c88cb16d0b6f1cf4c9e05d2cf6da636f92f
	header("Location: espaceAdmin.php");
	
?>