<?php
	session_start();
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', ''); //changer le mdp en fonction du serveur local de ton pc
	}
	catch (PDOException $e)
	{
		die('erreur : '.$e->getMessage());
	}

	$req=$bdd->query('SELECT login,password,admin from projet.employee');
	while($resultat=$req->fetch())
	{
		if ((strtoupper($resultat['login'])==strtoupper($_POST['login']))and($resultat['password']==$_POST['pwd']))
		{	
			$_SESSION['login']=$_POST['login'];
			$_SESSION['admin']=$resultat['admin'];
			header('Location: main.php');
			exit();
		}

	}
	header('Location: index.php?err=2');
	?>