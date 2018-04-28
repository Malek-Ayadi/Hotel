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

		$req=$bdd->prepare('INSERT INTO projet.consommation (id_clt,id_produit) VALUES (?,?)');
            $req->execute(array
            (
                $_POST['id_clt'],
                $_POST['id_produit']
            ));
            header("Location: consommation.php?err");
            exit();


	?>