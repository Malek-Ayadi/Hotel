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
?>

   <?php
    $reponse = $bdd->query('SELECT * FROM projet.client');
while ($aff=$reponse->fetch())
{
    if ($aff['cin']==$_POST ['cin'])
    {
        $id=$aff['id_clt'];
        $req=$bdd->prepare('SELECT * FROM  projet.produit B, projet.consommation C WHERE B.id_produit=C.id_produit AND  C.id_clt=? ');
        $req->execute(array($id));
        $facture=0 ; // initialiser selon le prix d'une chambre 
        while ($affiche=$req->fetch())
       {
            ?>
            <table align="center">
    <tr>
        <td>N°Consommation</td> <td>Libellé</td> <td>Prix</td>
    </tr>
            <tr>
                <td>
                    <?php
                    echo ($affiche['id_cons']);
                    ?>
                </td>
                 <td>
                    <?php
                    echo ($affiche['libelle']);
                    ?>
                </td>
                 <td>
                    <?php
                    echo ($affiche['prix']);
                    $facture=$facture+$affiche['prix'] ; 
                    ?>
                </td>
            </tr>
               

        <?php 
        }
    }
    else
    {
        echo ("Le client n'existe pas ou CIN incorrect");
        exit() ; 
    }
}
 
?>
<tr>
    <td colspan="2"> Total </td>
    <td>
                    <?php
                    echo ($facture); 
                    ?>
            </td>



</table>