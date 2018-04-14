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

	}
	else
	{
		$admin=0;
	} 
	$req=$bdd->prepare('SELECT `password` from `projet`.`employee` where `login`=?');
    $req->execute(array($_GET['login']));
    $resultat=$req->fetch();
    $ancienMDP=$resultat['password'];
    if($ancienMDP!=$_POST['ancienPassword'])
    	{header('Location: modifierPersonnel.php?login='.($_POST['login']).'&nom='.$_POST['nom'].'&prenom='.$_POST['prenom'].'&mail='.$_POST['mail'].'&admin='.$_POST['admin'].'&err');
    	exit();}
	
		
		$req = $bdd->prepare ('UPDATE projet.employee SET login=?, password=?, nom=?, prenom=?, mail=?, admin=? WHERE login = ?');
		$req->execute(array(
			$_POST['login'],
			$_POST['password'],
			$_POST['nom'],
			$_POST['prenom'],
			$_POST['mail'],
			$admin,
			$_GET['login']
		));

		header("Location: espaceAdmin.php");
	
?>