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
	{
		$admin=1;
<<<<<<< HEAD
	}
	else
	{
		$admin=0;
	} 
	
		
		$req = $bdd->prepare ('UPDATE projet.employee SET login=?, password=?, nom=?, prenom=?, mail=?, admin=? WHERE login = ?');
		$req->execute(array(
			$_POST['login'],
			$_POST['password'],
			$_POST['nom'],
			$_POST['prenom'],
			$_POST['mail'],
			$admin,
			$_GET['login']

=======
	else $admin=0;
	$req=$bdd->prepare('UPDATE projet.employee SET login = :login, password = :password,nom=:nom,prenom=:prenom,mail=:mail,admin=:admin WHERE login =:login');
	$req->execute(array
		(
			'login'=>$_POST['login'],
			'password'=>$_POST['password'],
			'nom'=>$_POST['nom'],
			'prenom'=>$_POST['prenom'],
			'mail'=>$_POST['mail'],
			'admin'=>$admin,
			'login'=>$_GET['login']
>>>>>>> e0a43d761ae27bc575432def1726ae59fa564a16
		));
		header("Location: espaceAdmin.php");
	
?>