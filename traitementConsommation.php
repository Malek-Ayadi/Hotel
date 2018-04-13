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
$produit=0;
$clt=0;
$req1=$bdd->query('SELECT id_clt FROM projet.client');
while ($aff=$req1->fetch())
{

    if ($aff['id_clt']==$_POST['id_clt'])
	{
		$clt=1;
		break;
	}
}
$req2=$bdd->query('SELECT id_produit FROM projet.produit ');
while ($aff=$req2->fetch())
{
	if ($aff['id_produit']==$_POST['id_produit'])
     {
     	$produit =1;
     	break;
	 }
}
if(($produit==1)&&($clt==1))
	{
		$req=$bdd->prepare('INSERT INTO projet.consommation (id_clt,id_produit) VALUES (?,?)');
            $req->execute(array
            (
                $_POST['id_clt'],
                $_POST['id_produit']
            ));
            header("Location: consommation.php?err");
            exit();
	}
else if(($produit==0)&&($clt==0))
	{
		header("Location: consommation.php?err1");
	}
else if($clt==0)
	{
		header("Location: consommation.php?err2");
	}
else if($produit==0)
	{
		header("Location: consommation.php?err3");
	}

	?>