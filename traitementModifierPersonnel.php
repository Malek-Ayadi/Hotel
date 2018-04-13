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
		));
	header("Location: espaceAdmin.php");
	
?>