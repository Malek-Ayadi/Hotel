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

	$req=$bdd->query('SELECT login,password from projet.employee');
	while($resultat=$req->fetch())
	{
		if (strtoupper($resultat['login'])==strtoupper($_POST['login']))
		{	echo'hello';

			if ($resultat['password']==$_POST['pwd'])
			{
				$_SESSION['login']=$_POST['login'];
				header('Location: main.php');
				exit();
			}
		}

	}
	header('Location: index.php?err=2');
	?>