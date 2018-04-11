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

	$req1=$bdd->query('SELECT id_clt,id_produit FROM projet.client,projet.produit ');
	while ($aff=$req1->fetch())
	{
		if ($aff['id_clt']==$_POST['id_clt'])
		{
			if ($aff['id_produit']==$_POST['id_produit'])
			{
				$req=$bdd->prepare('INSERT INTO projet.consommation (id_clt,id_produit) VALUES (?,?)');
				$req->execute(array
					(	
						$_POST['id_clt'],
						$_POST['id_produit']
					));
			}
			else
			{
				header("Location: consommation.php");
				exit();
			}

		}
		else
		{
			header("Location: consommation.php");
			exit();
		}
	}
	header("Location: consommation.php");


?> 