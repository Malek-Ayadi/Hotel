<?php
	try
	{
		$bdd= new PDO('mysql:host=localhost;dbName=projet', 'root','');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());

	}

	/*Requête : Rechercher les id des chambres qui ne se trouvent pas dans la table réservation et donc ne sont pas réservées
	  ou bien les id des chambres réservées mais dans une date différente que celle demandée par le client 	
	  -->ON VA RENVOYER LA PREMIERE CHAMBRE LIBRE !!	
	*/
	
	$req=$bdd->prepare('SELECT C.id_chamb FROM projet.chambre C, projet.reservation R WHERE ( C.id_chamb not in (SELECT A.id_chamb FROM projet.reservation A WHERE A.id_chamb=C.id_chamb) AND C.type=? ) OR ((C.id_chamb=R.id_chamb) AND (R.dateDep<? OR R.dateArr>? ) AND C.type=?)');
	$req->execute(array($_POST['type'],$_POST['dateArr'],$_POST['dateDep'],$_POST['type']));
	$final=$req->fetch();
	
	if ($final['id_chamb']==NULL)
	{
		header("Location:VerifierDisponibiliteDateRes.php?dispo=non");
		exit();
	}
	else
	{	
		$dateArr=$_POST['dateArr'];
		$dateDep=$_POST['dateDep'];
		$chambre=$final['id_chamb'];
		header("Location:enregistrement.php?chambre=$chambre&dateArr=$dateArr&dateDep=$dateDep");
		exit();
	}
	

?>